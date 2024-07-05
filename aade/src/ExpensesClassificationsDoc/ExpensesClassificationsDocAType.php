<?php

namespace Sofar\Aade\ExpensesClassificationsDoc;

/**
 * Class representing ExpensesClassificationsDocAType
 */
class ExpensesClassificationsDocAType
{
    /**
     * @var \Sofar\Aade\InvoiceExpensesClassificationType $expensesInvoiceClassification
     */
    private $expensesInvoiceClassification = null;

    /**
     * Gets as expensesInvoiceClassification
     *
     * @return \Sofar\Aade\InvoiceExpensesClassificationType
     */
    public function getExpensesInvoiceClassification()
    {
        return $this->expensesInvoiceClassification;
    }

    /**
     * Sets a new expensesInvoiceClassification
     *
     * @param \Sofar\Aade\InvoiceExpensesClassificationType $expensesInvoiceClassification
     * @return self
     */
    public function setExpensesInvoiceClassification(\Sofar\Aade\InvoiceExpensesClassificationType $expensesInvoiceClassification)
    {
        $this->expensesInvoiceClassification = $expensesInvoiceClassification;
        return $this;
    }
}

