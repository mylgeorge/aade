<?php

namespace Sofar\Aade;

/**
 * Class representing ProviderSignatureType
 *
 *
 * XSD Type: ProviderSignatureType
 */
class ProviderSignatureType
{
    /**
     * Provider’s Id
     *
     * @var string $signingAuthor
     */
    private $signingAuthor = null;

    /**
     * Υπογραφή
     *
     * @var string $signature
     */
    private $signature = null;

    /**
     * Gets as signingAuthor
     *
     * Provider’s Id
     *
     * @return string
     */
    public function getSigningAuthor()
    {
        return $this->signingAuthor;
    }

    /**
     * Sets a new signingAuthor
     *
     * Provider’s Id
     *
     * @param string $signingAuthor
     * @return self
     */
    public function setSigningAuthor($signingAuthor)
    {
        $this->signingAuthor = $signingAuthor;
        return $this;
    }

    /**
     * Gets as signature
     *
     * Υπογραφή
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * Υπογραφή
     *
     * @param string $signature
     * @return self
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }
}

