<?php

namespace Sofar\Aade\Models;

use Sofar\Aade\Aade;
use Sofar\Aade\InvoicesDoc;
use Sofar\Aade\AadeBookInvoiceType;
use Sofar\Aade\Utils\Serializer;
use Sofar\Aade\Utils\Query;
use Sofar\Aade\Utils\Helpers;
use \Sofar\Aade\Utils\Validator;

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
    ];

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    /**
     * 
     * @return AadeBookInvoiceType[]
     */
    public function get()
    {
        $extra = [];
        $defaults = ['mark' => 0];
        $response = Aade::Client()->request('GET', 'RequestTransmittedDocs', [
            'query' => $this->query->wheres + $defaults
        ]);

        $report = Serializer::deserialize($response->getBody()->getContents(), 'Sofar\Aade\RequestedDoc');

        // var_dump($report);
        // $cursor = $report->getContinuationToken();
        // if(!is_null($cursor)){

        //     return $this->where([
        //         'nextPartitionKey' => $cursor->getNextPartitionKey(),
        //         'nextRowKey' => $cursor->getNextRowKey(),
        //     ])->get();
        // }

        return $report->getInvoicesDoc() + $extra;
    }

    protected function save(InvoicesDoc $invoices)
    {
        if (!Validator::isValid($invoices)) throw new \Exception('Invoices Validation Error!');

        $xml = Serializer::serialize($invoices);

        $response = Aade::Client()->request('POST', 'SendInvoices', ['body' => $xml]);

        $report = Serializer::deserialize($response->getBody()->getContents());

        return $report->getResponse();
    }

    protected function cancel($mark)
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
            $this->document = new \Sofar\Aade\AadeBookInvoiceType;
            $this->fill($invoice);
            $invoiceList->addToInvoice(clone $this->document);
        }

        return $this->save($invoiceList);
    }

    public function fill(array $attributes)
    {
        if (is_null($this->document)) $this->document = new \Sofar\Aade\AadeBookInvoiceType();

        $this->make($attributes, $this->document);
    }

    public function make(array $attributes, &$parent)
    {
        foreach ($attributes as $part => $properties) {
            $class = self::PARTS[$part] ?? null;
            if (is_array($class)) {
                $class = reset($class);
                $obj = new $class;
                foreach ($properties as $k => $v) {
                    $this->make($v, $obj);
                }
                $parent->{'addTo' . ucfirst($part)}($obj);
            } else if (is_array($properties)) {
                $obj = $parent->{'get' . ucfirst($part)}();
                if (is_null($obj)) {
                    $val = !is_array(self::PARTS[$part]) ? new $class : [];
                    $parent->{'set' . ucfirst($part)}($val);
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
