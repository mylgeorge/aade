<?php

namespace Sofar\Aade\AadeBookInvoiceType;

/**
 * Class representing TaxesTotalsAType
 */
class TaxesTotalsAType
{
    /**
     * @var \Sofar\Aade\TaxTotalsType[] $taxes
     */
    private $taxes = [
        
    ];

    /**
     * Adds as taxes
     *
     * @return self
     * @param \Sofar\Aade\TaxTotalsType $taxes
     */
    public function addToTaxes(\Sofar\Aade\TaxTotalsType $taxes)
    {
        $this->taxes[] = $taxes;
        return $this;
    }

    /**
     * isset taxes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * @return \Sofar\Aade\TaxTotalsType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * @param \Sofar\Aade\TaxTotalsType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }
}

