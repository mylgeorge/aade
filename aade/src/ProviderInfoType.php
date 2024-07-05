<?php

namespace Sofar\Aade;

/**
 * Class representing ProviderInfoType
 *
 *
 * XSD Type: ProviderInfoType
 */
class ProviderInfoType
{
    /**
     * ΑΦΜ
     *
     * @var string $vATNumber
     */
    private $vATNumber = null;

    /**
     * Gets as vATNumber
     *
     * ΑΦΜ
     *
     * @return string
     */
    public function getVATNumber()
    {
        return $this->vATNumber;
    }

    /**
     * Sets a new vATNumber
     *
     * ΑΦΜ
     *
     * @param string $vATNumber
     * @return self
     */
    public function setVATNumber($vATNumber)
    {
        $this->vATNumber = $vATNumber;
        return $this;
    }
}

