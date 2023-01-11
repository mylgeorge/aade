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
     * @var string[] $vATNumber
     */
    private $vATNumber = [
        
    ];

    /**
     * Adds as vATNumber
     *
     * ΑΦΜ
     *
     * @return self
     * @param string $vATNumber
     */
    public function addToVATNumber($vATNumber)
    {
        $this->vATNumber[] = $vATNumber;
        return $this;
    }

    /**
     * isset vATNumber
     *
     * ΑΦΜ
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVATNumber($index)
    {
        return isset($this->vATNumber[$index]);
    }

    /**
     * unset vATNumber
     *
     * ΑΦΜ
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVATNumber($index)
    {
        unset($this->vATNumber[$index]);
    }

    /**
     * Gets as vATNumber
     *
     * ΑΦΜ
     *
     * @return string[]
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
     * @param string[] $vATNumber
     * @return self
     */
    public function setVATNumber(array $vATNumber = null)
    {
        $this->vATNumber = $vATNumber;
        return $this;
    }
}

