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
     * @var \Sofar\Aade\RequestedDoc\RequestedDocAType\InvoicesDocAType $invoicesDoc
     */
    private $invoicesDoc = null;

    /**
     * @var \Sofar\Aade\RequestedDoc\RequestedDocAType\CancelledInvoicesDocAType $cancelledInvoicesDoc
     */
    private $cancelledInvoicesDoc = null;

    /**
     * @var \Sofar\Aade\RequestedDoc\RequestedDocAType\IncomeClassificationsDocAType $incomeClassificationsDoc
     */
    private $incomeClassificationsDoc = null;

    /**
     * @var \Sofar\Aade\RequestedDoc\RequestedDocAType\ExpensesClassificationsDocAType $expensesClassificationsDoc
     */
    private $expensesClassificationsDoc = null;

    /**
     * @var \Sofar\Aade\RequestedDoc\RequestedDocAType\PaymentMethodsDocAType $paymentMethodsDoc
     */
    private $paymentMethodsDoc = null;

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
     * Gets as invoicesDoc
     *
     * @return \Sofar\Aade\RequestedDoc\RequestedDocAType\InvoicesDocAType
     */
    public function getInvoicesDoc()
    {
        return $this->invoicesDoc;
    }

    /**
     * Sets a new invoicesDoc
     *
     * @param \Sofar\Aade\RequestedDoc\RequestedDocAType\InvoicesDocAType $invoicesDoc
     * @return self
     */
    public function setInvoicesDoc(?\Sofar\Aade\RequestedDoc\RequestedDocAType\InvoicesDocAType $invoicesDoc = null)
    {
        $this->invoicesDoc = $invoicesDoc;
        return $this;
    }

    /**
     * Gets as cancelledInvoicesDoc
     *
     * @return \Sofar\Aade\RequestedDoc\RequestedDocAType\CancelledInvoicesDocAType
     */
    public function getCancelledInvoicesDoc()
    {
        return $this->cancelledInvoicesDoc;
    }

    /**
     * Sets a new cancelledInvoicesDoc
     *
     * @param \Sofar\Aade\RequestedDoc\RequestedDocAType\CancelledInvoicesDocAType $cancelledInvoicesDoc
     * @return self
     */
    public function setCancelledInvoicesDoc(?\Sofar\Aade\RequestedDoc\RequestedDocAType\CancelledInvoicesDocAType $cancelledInvoicesDoc = null)
    {
        $this->cancelledInvoicesDoc = $cancelledInvoicesDoc;
        return $this;
    }

    /**
     * Gets as incomeClassificationsDoc
     *
     * @return \Sofar\Aade\RequestedDoc\RequestedDocAType\IncomeClassificationsDocAType
     */
    public function getIncomeClassificationsDoc()
    {
        return $this->incomeClassificationsDoc;
    }

    /**
     * Sets a new incomeClassificationsDoc
     *
     * @param \Sofar\Aade\RequestedDoc\RequestedDocAType\IncomeClassificationsDocAType $incomeClassificationsDoc
     * @return self
     */
    public function setIncomeClassificationsDoc(?\Sofar\Aade\RequestedDoc\RequestedDocAType\IncomeClassificationsDocAType $incomeClassificationsDoc = null)
    {
        $this->incomeClassificationsDoc = $incomeClassificationsDoc;
        return $this;
    }

    /**
     * Gets as expensesClassificationsDoc
     *
     * @return \Sofar\Aade\RequestedDoc\RequestedDocAType\ExpensesClassificationsDocAType
     */
    public function getExpensesClassificationsDoc()
    {
        return $this->expensesClassificationsDoc;
    }

    /**
     * Sets a new expensesClassificationsDoc
     *
     * @param \Sofar\Aade\RequestedDoc\RequestedDocAType\ExpensesClassificationsDocAType $expensesClassificationsDoc
     * @return self
     */
    public function setExpensesClassificationsDoc(?\Sofar\Aade\RequestedDoc\RequestedDocAType\ExpensesClassificationsDocAType $expensesClassificationsDoc = null)
    {
        $this->expensesClassificationsDoc = $expensesClassificationsDoc;
        return $this;
    }

    /**
     * Gets as paymentMethodsDoc
     *
     * @return \Sofar\Aade\RequestedDoc\RequestedDocAType\PaymentMethodsDocAType
     */
    public function getPaymentMethodsDoc()
    {
        return $this->paymentMethodsDoc;
    }

    /**
     * Sets a new paymentMethodsDoc
     *
     * @param \Sofar\Aade\RequestedDoc\RequestedDocAType\PaymentMethodsDocAType $paymentMethodsDoc
     * @return self
     */
    public function setPaymentMethodsDoc(?\Sofar\Aade\RequestedDoc\RequestedDocAType\PaymentMethodsDocAType $paymentMethodsDoc = null)
    {
        $this->paymentMethodsDoc = $paymentMethodsDoc;
        return $this;
    }
}

