<?php

namespace Sofar\Aade;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: AddressType
 */
class AddressType
{
    /**
     * @var string $street
     */
    private $street = null;

    /**
     * Αριθμός
     *
     * @var string $number
     */
    private $number = null;

    /**
     * ΤΚ
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as number
     *
     * Αριθμός
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Αριθμός
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * ΤΚ
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * ΤΚ
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
}

