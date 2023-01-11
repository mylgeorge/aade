<?php

namespace Sofar\Aade\IncomeClassificationsDoc;

/**
 * Class representing IncomeClassificationsDocAType
 */
class IncomeClassificationsDocAType
{
    /**
     * @var \Sofar\Aade\InvoiceIncomeClassificationType[] $incomeInvoiceClassification
     */
    private $incomeInvoiceClassification = [
        
    ];

    /**
     * Adds as incomeInvoiceClassification
     *
     * @return self
     * @param \Sofar\Aade\InvoiceIncomeClassificationType $incomeInvoiceClassification
     */
    public function addToIncomeInvoiceClassification(\Sofar\Aade\InvoiceIncomeClassificationType $incomeInvoiceClassification)
    {
        $this->incomeInvoiceClassification[] = $incomeInvoiceClassification;
        return $this;
    }

    /**
     * isset incomeInvoiceClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncomeInvoiceClassification($index)
    {
        return isset($this->incomeInvoiceClassification[$index]);
    }

    /**
     * unset incomeInvoiceClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncomeInvoiceClassification($index)
    {
        unset($this->incomeInvoiceClassification[$index]);
    }

    /**
     * Gets as incomeInvoiceClassification
     *
     * @return \Sofar\Aade\InvoiceIncomeClassificationType[]
     */
    public function getIncomeInvoiceClassification()
    {
        return $this->incomeInvoiceClassification;
    }

    /**
     * Sets a new incomeInvoiceClassification
     *
     * @param \Sofar\Aade\InvoiceIncomeClassificationType[] $incomeInvoiceClassification
     * @return self
     */
    public function setIncomeInvoiceClassification(array $incomeInvoiceClassification)
    {
        $this->incomeInvoiceClassification = $incomeInvoiceClassification;
        return $this;
    }
}

