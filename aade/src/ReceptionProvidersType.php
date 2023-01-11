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
     * @var string[] $providerInfo
     */
    private $providerInfo = null;

    /**
     * Adds as vATNumber
     *
     * Πληροφορίες Παρόχου
     *
     * @return self
     * @param string $vATNumber
     */
    public function addToProviderInfo($vATNumber)
    {
        $this->providerInfo[] = $vATNumber;
        return $this;
    }

    /**
     * isset providerInfo
     *
     * Πληροφορίες Παρόχου
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProviderInfo($index)
    {
        return isset($this->providerInfo[$index]);
    }

    /**
     * unset providerInfo
     *
     * Πληροφορίες Παρόχου
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProviderInfo($index)
    {
        unset($this->providerInfo[$index]);
    }

    /**
     * Gets as providerInfo
     *
     * Πληροφορίες Παρόχου
     *
     * @return string[]
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
     * @param string[] $providerInfo
     * @return self
     */
    public function setProviderInfo(array $providerInfo = null)
    {
        $this->providerInfo = $providerInfo;
        return $this;
    }
}

