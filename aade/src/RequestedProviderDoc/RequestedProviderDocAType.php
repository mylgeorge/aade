<?php

namespace Sofar\Aade\RequestedProviderDoc;

/**
 * Class representing RequestedProviderDocAType
 */
class RequestedProviderDocAType
{
    /**
     * @var \Sofar\Aade\ContinuationTokenType $continuationToken
     */
    private $continuationToken = null;

    /**
     * @var \Sofar\Aade\InvoiceProviderType $invoiceProviderType
     */
    private $invoiceProviderType = null;

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
     * Gets as invoiceProviderType
     *
     * @return \Sofar\Aade\InvoiceProviderType
     */
    public function getInvoiceProviderType()
    {
        return $this->invoiceProviderType;
    }

    /**
     * Sets a new invoiceProviderType
     *
     * @param \Sofar\Aade\InvoiceProviderType $invoiceProviderType
     * @return self
     */
    public function setInvoiceProviderType(?\Sofar\Aade\InvoiceProviderType $invoiceProviderType = null)
    {
        $this->invoiceProviderType = $invoiceProviderType;
        return $this;
    }
}

