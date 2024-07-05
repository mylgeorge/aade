<?php

namespace Sofar\Aade;

/**
 * Class representing ReceptionProvidersType
 *
 *
 * XSD Type: receptionProvidersType
 */
class ReceptionProvidersType
{
    /**
     * Πληροφορίες Παρόχου
     *
     * @var \Sofar\Aade\ProviderInfoType $providerInfo
     */
    private $providerInfo = null;

    /**
     * Gets as providerInfo
     *
     * Πληροφορίες Παρόχου
     *
     * @return \Sofar\Aade\ProviderInfoType
     */
    public function getProviderInfo()
    {
        return $this->providerInfo;
    }

    /**
     * Sets a new providerInfo
     *
     * Πληροφορίες Παρόχου
     *
     * @param \Sofar\Aade\ProviderInfoType $providerInfo
     * @return self
     */
    public function setProviderInfo(?\Sofar\Aade\ProviderInfoType $providerInfo = null)
    {
        $this->providerInfo = $providerInfo;
        return $this;
    }
}

