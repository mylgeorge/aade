<?php

namespace Sofar\Aade\Models;

use Sofar\Aade\Aade;
use Sofar\Aade\InvoicesDoc;
use Sofar\Aade\AadeBookInvoiceType;
use Sofar\Aade\InvoiceSummaryType;

use Sofar\Aade\Utils\Serializer;
use Sofar\Aade\Utils\Query;
use Sofar\Aade\Utils\Helpers;
use Sofar\Aade\Utils\Validator;

use DragonBe\Vies\Vies;
use Sofar\Aade\IncomeClassificationType;

class Invoice
{
    protected ?Query $query = null;
    protected ?AadeBookInvoiceType $document = null;

    const PARTS = [
        'invoiceHeader' => '\Sofar\Aade\InvoiceHeaderType',
        'invoiceSummary' => '\Sofar\Aade\InvoiceSummaryType',
        'issuer' => '\Sofar\Aade\PartyType',
        'counterpart' => '\Sofar\Aade\PartyType',
        'address' => '\Sofar\Aade\AddressType',
        'invoiceDetails' => ['\Sofar\Aade\InvoiceRowType'],
        'paymentMethods' => ['\Sofar\Aade\PaymentMethodDetailType'],
        'incomeClassification' => ['\Sofar\Aade\IncomeClassificationType'],
        'taxesTotals' => ['\Sofar\Aade\TaxTotalsType'],
        'correlatedInvoices' => []
    ];

    public static $defaultClassificationCategory = 'category1_2';

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    /**
     * 
     * @return AadeBookInvoiceType[]
     */
    public function get(array $query = []) : array
    {
        $extra = [];
        $defaults = ['mark' => 0];
        $response = Aade::Client()->request('GET', 'RequestTransmittedDocs', [
            'query' => $query + $this->query->wheres + $defaults
        ]);

        $report = Serializer::deserialize($response->getBody()->getContents(), 'Sofar\Aade\RequestedDoc');

        $cursor = $report->getContinuationToken();
        if (!is_null($cursor)) {
            $extra = $this->where([
                'nextPartitionKey' => $cursor->getNextPartitionKey(),
                'nextRowKey' => $cursor->getNextRowKey(),
            ])->get();
        }

        return [...$report->getInvoicesDoc(), ...$extra];
    }

    /**
     * 
     * @return AadeBookInvoiceType[]
     */
    public function getRequestDocs(array $query = []) : array
    {
        $extra = [];
        $defaults = ['mark' => 0];
        $response = Aade::Client()->request('GET', 'RequestDocs', [
            'query' => $query + $this->query->wheres + $defaults
        ]);

        $report = Serializer::deserialize($response->getBody()->getContents(), 'Sofar\Aade\RequestedDoc');

        $cursor = $report->getContinuationToken();
        if (!is_null($cursor)) {
            $extra = $this->where([
                'nextPartitionKey' => $cursor->getNextPartitionKey(),
                'nextRowKey' => $cursor->getNextRowKey(),
            ])->get();
        }

        return [...$report->getInvoicesDoc(), ...$extra];
    }

    protected function save(InvoicesDoc $invoices)
    {
        $this->prepare($invoices);

        if (!Validator::isValid($invoices)) throw new \Exception('Invoices Validation Error!');

        $xml = Serializer::serialize($invoices);

        $response = Aade::Client()->request('POST', 'SendInvoices', ['body' => $xml]);

        $report = Serializer::deserialize($response->getBody()->getContents());

        return $report->getResponse();
    }

    public static function cancel($mark)
    {
        $response = Aade::Client()->request('POST', 'CancelInvoice', ['query' => compact('mark')]);

        $report = Serializer::deserialize($response->getBody()->getContents());

        return $report->getResponse();
    }

    public static function all()
    {
        return static::query()->get();
    }

    public function send($invoice = [])
    {
        $invoiceList = new InvoicesDoc();

        $this->fill($invoice);
        $invoiceList->addToInvoice($this->document);

        return $this->save($invoiceList);
    }

    public function sendMany($invoices = [])
    {
        $invoiceList = new InvoicesDoc();

        foreach ($invoices as $invoice) {
            $this->document = new AadeBookInvoiceType;
            $this->fill($invoice);
            $invoiceList->addToInvoice(clone $this->document);
        }

        return $this->save($invoiceList);
    }

    public function fill(array $attributes)
    {
        if (is_null($this->document)) $this->document = new AadeBookInvoiceType;

        $this->make($attributes, $this->document);
    }

    public function prepare(InvoicesDoc $invoices)
    {
        foreach ($invoices->getInvoice() as $invoice) {
            $code = '';
            $vatCategory = 1;
            $classificationType = null;
            $classificationCategory = self::$defaultClassificationCategory;
            $vatExemptionCategory = null;

            $invoiceHeader = $invoice->getInvoiceHeader();
            $invoiceSummary = $invoice->getInvoiceSummary();

            $invoiceTypeCode = $invoiceHeader->getInvoiceType();

            $counterPart = clone $invoice->getCounterpart();
            $isRetail = empty($counterPart->getVatNumber());

            $countryCode = $counterPart->getCountry();
            if ($countryCode === 'GR') {
                $code = '.1';
                if (!$isRetail) {
                    $classificationType = 'E3_561_001';
                    $counterPart->setAddress(null)->setName(null);
                } else {
                    $invoiceTypeCode = '11.1';
                    $classificationType = 'E3_561_003';
                    $counterPart = null;
                }
            } else if ($this->isEuropeanCountry($countryCode)) {
                $code = '.2';
                $classificationType = 'E3_561_005';
                if (!$isRetail) {
                    $vatCategory = 7;
                    $vatExemptionCategory = 14;
                } else {
                    $invoiceTypeCode = '11.1';
                    $classificationType = 'E3_561_003';
                    $counterPart = null;
                }
            } else if (!is_null($counterPart)) {
                $code = '.3';
                $classificationType = 'E3_561_006';
                $vatCategory = 7;
                $vatExemptionCategory = 8;
                if ($isRetail) $counterPart->setVatNumber('000000000');
            }

            $invoiceHeader->setInvoiceType(str_replace('.0', $code, $invoiceTypeCode));
            $invoice->setCounterpart($counterPart);

            $totalIncomeClassification = [];
            $createInvoiceSummary = false;

            if (is_null($invoiceSummary)) {
                $createInvoiceSummary = true;
                $invoiceSummary = (new InvoiceSummaryType)
                    ->setTotalFeesAmount(0)
                    ->setTotalStampDutyAmount(0)
                    ->setTotalDeductionsAmount(0)
                    ->setTotalOtherTaxesAmount(0)
                    ->setTotalWithheldAmount(0)
                    ->setTotalVatAmount(0)
                    ->setTotalNetValue(0)
                    ->setTotalGrossValue(0)
                    ->setIncomeClassification([]);
                $invoice->setInvoiceSummary($invoiceSummary);
            } else {
                $invoiceSummary->setTotalFeesAmount($invoiceSummary->getTotalFeesAmount() ?: 0)
                    ->setTotalStampDutyAmount($invoiceSummary->getTotalStampDutyAmount() ?: 0)
                    ->setTotalDeductionsAmount($invoiceSummary->getTotalDeductionsAmount() ?: 0)
                    ->setTotalOtherTaxesAmount($invoiceSummary->getTotalOtherTaxesAmount() ?: 0)
                    ->setTotalWithheldAmount($invoiceSummary->getTotalWithheldAmount() ?: 0)
                    ->setTotalVatAmount($invoiceSummary->getTotalVatAmount() ?: 0)
                    ->setTotalNetValue($invoiceSummary->getTotalNetValue() ?: 0)
                    ->setTotalGrossValue($invoiceSummary->getTotalGrossValue() ?: 0);
            }

            foreach ($invoice->getInvoiceDetails() as $index => $line) {
                $line->setLineNumber($index + 1)
                    ->setVatCategory($line->getVatCategory() ?: $vatCategory)
                    ->setVatExemptionCategory($line->getVatExemptionCategory() ?: $vatExemptionCategory);

                if (count($line->getIncomeClassification()) === 0) {
                    $line->addToIncomeClassification(new IncomeClassificationType);
                }

                $amount = $line->getNetValue();
                foreach ($line->getIncomeClassification() as $l) {
                    $l->setClassificationCategory($l->getClassificationCategory() ?: $classificationCategory)
                        ->setClassificationType($l->getClassificationType() ?: $classificationType)
                        ->setAmount($l->getAmount() ?: $amount);

                    if (empty($totalIncomeClassification[$l->getClassificationCategory()][$l->getClassificationType()])) {
                        $totalIncomeClassification[$l->getClassificationCategory()][$l->getClassificationType()] = 0;
                    }

                    $totalIncomeClassification[$l->getClassificationCategory()][$l->getClassificationType()] += floatval($l->getAmount());
                }

                if ($createInvoiceSummary) {
                    $grossValue = $invoiceSummary->getTotalGrossValue() + $line->getVatAmount() + $line->getNetValue() - $line->getWithheldAmount();

                    $invoiceSummary->setTotalFeesAmount($invoiceSummary->getTotalFeesAmount() + $line->getFeesAmount())
                        ->setTotalStampDutyAmount($invoiceSummary->getTotalStampDutyAmount() + $line->getStampDutyAmount())
                        ->setTotalDeductionsAmount($invoiceSummary->getTotalDeductionsAmount() + $line->getDeductionsAmount())
                        ->setTotalOtherTaxesAmount($invoiceSummary->getTotalOtherTaxesAmount() + $line->getOtherTaxesAmount())
                        ->setTotalWithheldAmount($invoiceSummary->getTotalWithheldAmount() + $line->getWithheldAmount())
                        ->setTotalVatAmount($invoiceSummary->getTotalVatAmount() + $line->getVatAmount())
                        ->setTotalNetValue($invoiceSummary->getTotalNetValue() + $line->getNetValue())
                        ->setTotalGrossValue($grossValue);
                }
            }

            if ($createInvoiceSummary || count($invoiceSummary->getIncomeClassification()) === 0) {
                foreach ($totalIncomeClassification as $category => $values) {
                    foreach ($values as $type => $amount) {
                        $invoiceSummary->addToIncomeClassification(
                            (new IncomeClassificationType)->setAmount($amount)
                                ->setClassificationType($type)
                                ->setClassificationCategory($category)
                        );
                    }
                }
            }
        }
    }

    protected function isEuropeanCountry($code)
    {
        return in_array($code, array_keys(Vies::listEuropeanCountries()));
    }

    public function make(array $attributes, &$parent)
    {
        foreach ($attributes as $part => $properties) {
            $class = self::PARTS[$part] ?? null;
            if (is_array($class)) {
                $class = reset($class);
                foreach ($properties as $k => $v) {
                    if($class){
                        $obj = new $class;
                        $this->make($v, $obj);
                        $parent->{'addTo' . ucfirst($part)}(clone $obj);
                    }
                    else {
                        $parent->{'addTo' . ucfirst($part)}($v);
                    }
                }
            } else if (is_array($properties)) {
                $obj = $parent->{'get' . ucfirst($part)}();
                if (is_null($obj)) {
                    $val = !is_array(self::PARTS[$part]) ? new $class : [];
                    $parent->{'set' . ucfirst($part)}(clone $val);
                    $obj = $parent->{'get' . ucfirst($part)}();
                }

                $this->make($properties, $obj);
            } else if (Helpers::isClassProperty($part, get_class($parent))) {
                $parent->{'set' . ucfirst($part)}($properties);
            }
        }
    }

    public function newQuery()
    {
        $this->query = new Query();

        return $this->query->setModel($this);
    }

    public static function query()
    {
        return (new static)->newQuery();
    }

    public static function create()
    {
        return (new static)->newQuery();
    }

    /**
     * Handle dynamic static method calls into the model.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return (new static)->$method(...$parameters);
    }

    public function __call($method, $parameters)
    {
        return $this->newQuery()->$method(...$parameters);
    }

    public function uuid()
    {
        // “Α.Φ.Μ Εκδότη” + “-“ + “Ημερομηνία Έκδοσης” (στη μορφή ‘yyyy-MM-dd’) + “Αριθμός
        // Εγκατάστασης Εκδότη” + “-“ + “ Τύπος Παραστατικού ” + “Σειρά” + “ ΑΑ ”.
        // example 999999999-2020-10-22-0-1.1-Α-2

        $value = implode('-', [
            '999999999', // $this->document->getIssuer()->getVatNumber(), 
            '2022-10-27',
            '0',
            '2.1',
            '0',
            '16'
        ]);

        return sha1($value);
    }
}
