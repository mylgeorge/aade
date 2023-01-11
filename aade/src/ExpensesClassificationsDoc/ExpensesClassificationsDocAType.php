<?php

namespace Sofar\Aade\ExpensesClassificationsDoc;

/**
 * Class representing ExpensesClassificationsDocAType
 */
class ExpensesClassificationsDocAType
{
    /**
     * @var \Sofar\Aade\InvoiceExpensesClassificationType[] $expensesInvoiceClassification
     */
    private $expensesInvoiceClassification = [
        
    ];

    /**
     * Adds as expensesInvoiceClassification
     *
     * @return self
     * @param \Sofar\Aade\InvoiceExpensesClassificationType $expensesInvoiceClassification
     */
    public function addToExpensesInvoiceClassification(\Sofar\Aade\InvoiceExpensesClassificationType $expensesInvoiceClassification)
    {
        $this->expensesInvoiceClassification[] = $expensesInvoiceClassification;
        return $this;
    }

    /**
     * isset expensesInvoiceClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpensesInvoiceClassification($index)
    {
        return isset($this->expensesInvoiceClassification[$index]);
    }

    /**
     * unset expensesInvoiceClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpensesInvoiceClassification($index)
    {
        unset($this->expensesInvoiceClassification[$index]);
    }

    /**
     * Gets as expensesInvoiceClassification
     *
     * @return \Sofar\Aade\InvoiceExpensesClassificationType[]
     */
    public function getExpensesInvoiceClassification()
    {
        return $this->expensesInvoiceClassification;
    }

    /**
     * Sets a new expensesInvoiceClassification
     *
     * @param \Sofar\Aade\InvoiceExpensesClassificationType[] $expensesInvoiceClassification
     * @return self
     */
    public function setExpensesInvoiceClassification(array $expensesInvoiceClassification)
    {
        $this->expensesInvoiceClassification = $expensesInvoiceClassification;
        return $this;
    }
}

