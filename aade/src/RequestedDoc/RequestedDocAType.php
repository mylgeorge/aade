<?php

namespace Sofar\Aade\RequestedDoc;

/**
 * Class representing RequestedDocAType
 */
class RequestedDocAType
{
    /**
     * @var \Sofar\Aade\ContinuationTokenType $continuationToken
     */
    private $continuationToken = null;

    /**
     * @var \Sofar\Aade\AadeBookInvoiceType[] $invoicesDoc
     */
    private $invoicesDoc = null;

    /**
     * @var \Sofar\Aade\CancelledInvoiceType[] $cancelledInvoicesDoc
     */
    private $cancelledInvoicesDoc = null;

    /**
     * @var \Sofar\Aade\InvoiceIncomeClassificationType[] $incomeClassificationsDoc
     */
    private $incomeClassificationsDoc = null;

    /**
     * @var \Sofar\Aade\InvoiceExpensesClassificationType[] $expensesClassificationDoc
     */
    private $expensesClassificationDoc = null;

    /**
     * Gets as continuationToken
     *
     * @return \Sofar\Aade\ContinuationTokenType
     */
    public function getContinuationToken()
    {
        return $this->continuationToken;
    }

    /**
     * Sets a new continuationToken
     *
     * @param \Sofar\Aade\ContinuationTokenType $continuationToken
     * @return self
     */
    public function setContinuationToken(?\Sofar\Aade\ContinuationTokenType $continuationToken = null)
    {
        $this->continuationToken = $continuationToken;
        return $this;
    }

    /**
     * Adds as invoice
     *
     * @return self
     * @param \Sofar\Aade\AadeBookInvoiceType $invoice
     */
    public function addToInvoicesDoc(\Sofar\Aade\AadeBookInvoiceType $invoice)
    {
        $this->invoicesDoc[] = $invoice;
        return $this;
    }

    /**
     * isset invoicesDoc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicesDoc($index)
    {
        return isset($this->invoicesDoc[$index]);
    }

    /**
     * unset invoicesDoc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicesDoc($index)
    {
        unset($this->invoicesDoc[$index]);
    }

    /**
     * Gets as invoicesDoc
     *
     * @return \Sofar\Aade\AadeBookInvoiceType[]
     */
    public function getInvoicesDoc()
    {
        return $this->invoicesDoc;
    }

    /**
     * Sets a new invoicesDoc
     *
     * @param \Sofar\Aade\AadeBookInvoiceType[] $invoicesDoc
     * @return self
     */
    public function setInvoicesDoc(array $invoicesDoc = null)
    {
        $this->invoicesDoc = $invoicesDoc;
        return $this;
    }

    /**
     * Adds as cancelledInvoice
     *
     * @return self
     * @param \Sofar\Aade\CancelledInvoiceType $cancelledInvoice
     */
    public function addToCancelledInvoicesDoc(\Sofar\Aade\CancelledInvoiceType $cancelledInvoice)
    {
        $this->cancelledInvoicesDoc[] = $cancelledInvoice;
        return $this;
    }

    /**
     * isset cancelledInvoicesDoc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancelledInvoicesDoc($index)
    {
        return isset($this->cancelledInvoicesDoc[$index]);
    }

    /**
     * unset cancelledInvoicesDoc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancelledInvoicesDoc($index)
    {
        unset($this->cancelledInvoicesDoc[$index]);
    }

    /**
     * Gets as cancelledInvoicesDoc
     *
     * @return \Sofar\Aade\CancelledInvoiceType[]
     */
    public function getCancelledInvoicesDoc()
    {
        return $this->cancelledInvoicesDoc;
    }

    /**
     * Sets a new cancelledInvoicesDoc
     *
     * @param \Sofar\Aade\CancelledInvoiceType[] $cancelledInvoicesDoc
     * @return self
     */
    public function setCancelledInvoicesDoc(array $cancelledInvoicesDoc = null)
    {
        $this->cancelledInvoicesDoc = $cancelledInvoicesDoc;
        return $this;
    }

    /**
     * Adds as incomeInvoiceClassification
     *
     * @return self
     * @param \Sofar\Aade\InvoiceIncomeClassificationType $incomeInvoiceClassification
     */
    public function addToIncomeClassificationsDoc(\Sofar\Aade\InvoiceIncomeClassificationType $incomeInvoiceClassification)
    {
        $this->incomeClassificationsDoc[] = $incomeInvoiceClassification;
        return $this;
    }

    /**
     * isset incomeClassificationsDoc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncomeClassificationsDoc($index)
    {
        return isset($this->incomeClassificationsDoc[$index]);
    }

    /**
     * unset incomeClassificationsDoc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncomeClassificationsDoc($index)
    {
        unset($this->incomeClassificationsDoc[$index]);
    }

    /**
     * Gets as incomeClassificationsDoc
     *
     * @return \Sofar\Aade\InvoiceIncomeClassificationType[]
     */
    public function getIncomeClassificationsDoc()
    {
        return $this->incomeClassificationsDoc;
    }

    /**
     * Sets a new incomeClassificationsDoc
     *
     * @param \Sofar\Aade\InvoiceIncomeClassificationType[] $incomeClassificationsDoc
     * @return self
     */
    public function setIncomeClassificationsDoc(array $incomeClassificationsDoc = null)
    {
        $this->incomeClassificationsDoc = $incomeClassificationsDoc;
        return $this;
    }

    /**
     * Adds as expensesInvoiceClassification
     *
     * @return self
     * @param \Sofar\Aade\InvoiceExpensesClassificationType $expensesInvoiceClassification
     */
    public function addToExpensesClassificationDoc(\Sofar\Aade\InvoiceExpensesClassificationType $expensesInvoiceClassification)
    {
        $this->expensesClassificationDoc[] = $expensesInvoiceClassification;
        return $this;
    }

    /**
     * isset expensesClassificationDoc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpensesClassificationDoc($index)
    {
        return isset($this->expensesClassificationDoc[$index]);
    }

    /**
     * unset expensesClassificationDoc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpensesClassificationDoc($index)
    {
        unset($this->expensesClassificationDoc[$index]);
    }

    /**
     * Gets as expensesClassificationDoc
     *
     * @return \Sofar\Aade\InvoiceExpensesClassificationType[]
     */
    public function getExpensesClassificationDoc()
    {
        return $this->expensesClassificationDoc;
    }

    /**
     * Sets a new expensesClassificationDoc
     *
     * @param \Sofar\Aade\InvoiceExpensesClassificationType[] $expensesClassificationDoc
     * @return self
     */
    public function setExpensesClassificationDoc(array $expensesClassificationDoc = null)
    {
        $this->expensesClassificationDoc = $expensesClassificationDoc;
        return $this;
    }
}

