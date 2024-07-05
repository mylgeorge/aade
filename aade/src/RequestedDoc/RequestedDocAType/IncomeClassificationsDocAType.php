<?php

namespace Sofar\Aade\RequestedDoc\RequestedDocAType;

/**
 * Class representing IncomeClassificationsDocAType
 */
class IncomeClassificationsDocAType
{
    /**
     * @var \Sofar\Aade\InvoiceIncomeClassificationType $incomeInvoiceClassification
     */
    private $incomeInvoiceClassification = null;

    /**
     * Gets as incomeInvoiceClassification
     *
     * @return \Sofar\Aade\InvoiceIncomeClassificationType
     */
    public function getIncomeInvoiceClassification()
    {
        return $this->incomeInvoiceClassification;
    }

    /**
     * Sets a new incomeInvoiceClassification
     *
     * @param \Sofar\Aade\InvoiceIncomeClassificationType $incomeInvoiceClassification
     * @return self
     */
    public function setIncomeInvoiceClassification(?\Sofar\Aade\InvoiceIncomeClassificationType $incomeInvoiceClassification = null)
    {
        $this->incomeInvoiceClassification = $incomeInvoiceClassification;
        return $this;
    }
}

