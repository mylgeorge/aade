<?php

namespace Sofar\Aade;

/**
 * Class representing TaxTotalsType
 *
 *
 * XSD Type: TaxTotalsType
 */
class TaxTotalsType
{
    /**
     * Είδος Φόρου
     *
     * @var string $taxType
     */
    private $taxType = null;

    /**
     * Κατηγορία Φόρου
     *
     * @var int $taxCategory
     */
    private $taxCategory = null;

    /**
     * Υποκείμενη Αξία
     *
     * @var float $underlyingValue
     */
    private $underlyingValue = null;

    /**
     * Ποσό Φόρου
     *
     * @var float $taxAmount
     */
    private $taxAmount = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * Gets as taxType
     *
     * Είδος Φόρου
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * Sets a new taxType
     *
     * Είδος Φόρου
     *
     * @param string $taxType
     * @return self
     */
    public function setTaxType($taxType)
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * Κατηγορία Φόρου
     *
     * @return int
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * Κατηγορία Φόρου
     *
     * @param int $taxCategory
     * @return self
     */
    public function setTaxCategory($taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as underlyingValue
     *
     * Υποκείμενη Αξία
     *
     * @return float
     */
    public function getUnderlyingValue()
    {
        return $this->underlyingValue;
    }

    /**
     * Sets a new underlyingValue
     *
     * Υποκείμενη Αξία
     *
     * @param float $underlyingValue
     * @return self
     */
    public function setUnderlyingValue($underlyingValue)
    {
        $this->underlyingValue = $underlyingValue;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * Ποσό Φόρου
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * Ποσό Φόρου
     *
     * @param float $taxAmount
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

