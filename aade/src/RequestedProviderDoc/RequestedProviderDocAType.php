<?php

namespace Sofar\Aade\RequestedProviderDoc;

/**
 * Class representing RequestedProviderDocAType
 */
class RequestedProviderDocAType
{
    /**
     * @var \Sofar\Aade\ContinuationTokenType[] $continuationToken
     */
    private $continuationToken = [
        
    ];

    /**
     * @var \Sofar\Aade\InvoiceProviderType[] $invoiceProviderType
     */
    private $invoiceProviderType = [
        
    ];

    /**
     * Adds as continuationToken
     *
     * @return self
     * @param \Sofar\Aade\ContinuationTokenType $continuationToken
     */
    public function addToContinuationToken(\Sofar\Aade\ContinuationTokenType $continuationToken)
    {
        $this->continuationToken[] = $continuationToken;
        return $this;
    }

    /**
     * isset continuationToken
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContinuationToken($index)
    {
        return isset($this->continuationToken[$index]);
    }

    /**
     * unset continuationToken
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContinuationToken($index)
    {
        unset($this->continuationToken[$index]);
    }

    /**
     * Gets as continuationToken
     *
     * @return \Sofar\Aade\ContinuationTokenType[]
     */
    public function getContinuationToken()
    {
        return $this->continuationToken;
    }

    /**
     * Sets a new continuationToken
     *
     * @param \Sofar\Aade\ContinuationTokenType[] $continuationToken
     * @return self
     */
    public function setContinuationToken(array $continuationToken = null)
    {
        $this->continuationToken = $continuationToken;
        return $this;
    }

    /**
     * Adds as invoiceProviderType
     *
     * @return self
     * @param \Sofar\Aade\InvoiceProviderType $invoiceProviderType
     */
    public function addToInvoiceProviderType(\Sofar\Aade\InvoiceProviderType $invoiceProviderType)
    {
        $this->invoiceProviderType[] = $invoiceProviderType;
        return $this;
    }

    /**
     * isset invoiceProviderType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceProviderType($index)
    {
        return isset($this->invoiceProviderType[$index]);
    }

    /**
     * unset invoiceProviderType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceProviderType($index)
    {
        unset($this->invoiceProviderType[$index]);
    }

    /**
     * Gets as invoiceProviderType
     *
     * @return \Sofar\Aade\InvoiceProviderType[]
     */
    public function getInvoiceProviderType()
    {
        return $this->invoiceProviderType;
    }

    /**
     * Sets a new invoiceProviderType
     *
     * @param \Sofar\Aade\InvoiceProviderType[] $invoiceProviderType
     * @return self
     */
    public function setInvoiceProviderType(array $invoiceProviderType = null)
    {
        $this->invoiceProviderType = $invoiceProviderType;
        return $this;
    }
}

