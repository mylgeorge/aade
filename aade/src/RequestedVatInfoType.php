<?php

namespace Sofar\Aade;

/**
 * Class representing RequestedVatInfoType
 *
 *
 * XSD Type: RequestedVatInfoType
 */
class RequestedVatInfoType
{
    /**
     * @var \Sofar\Aade\ContinuationTokenType $continuationToken
     */
    private $continuationToken = null;

    /**
     * @var \Sofar\Aade\InvoiceVatDetailType[] $vatInfo
     */
    private $vatInfo = [
        
    ];

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
     * Adds as vatInfo
     *
     * @return self
     * @param \Sofar\Aade\InvoiceVatDetailType $vatInfo
     */
    public function addToVatInfo(\Sofar\Aade\InvoiceVatDetailType $vatInfo)
    {
        $this->vatInfo[] = $vatInfo;
        return $this;
    }

    /**
     * isset vatInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVatInfo($index)
    {
        return isset($this->vatInfo[$index]);
    }

    /**
     * unset vatInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVatInfo($index)
    {
        unset($this->vatInfo[$index]);
    }

    /**
     * Gets as vatInfo
     *
     * @return \Sofar\Aade\InvoiceVatDetailType[]
     */
    public function getVatInfo()
    {
        return $this->vatInfo;
    }

    /**
     * Sets a new vatInfo
     *
     * @param \Sofar\Aade\InvoiceVatDetailType[] $vatInfo
     * @return self
     */
    public function setVatInfo(array $vatInfo = null)
    {
        $this->vatInfo = $vatInfo;
        return $this;
    }
}

