<?php

namespace Sofar\Aade;

/**
 * Class representing PartyType
 *
 *
 * XSD Type: PartyType
 */
class PartyType
{
    /**
     * @var string $vatNumber
     */
    private $vatNumber = null;

    /**
     * Κωδ. Χώρας
     *
     * @var string $country
     */
    private $country = null;

    /**
     * Αρ. Εγκατάστασης
     *
     * @var int $branch
     */
    private $branch = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Διεύθυνση
     *
     * @var \Sofar\Aade\AddressType $address
     */
    private $address = null;

    /**
     * @var string $documentIdNo
     */
    private $documentIdNo = null;

    /**
     * Αρ. Παροχής Ηλ. Ρεύματος
     *
     * @var string $supplyAccountNo
     */
    private $supplyAccountNo = null;

    /**
     * Κωδ. Χώρας Έκδοσης Επίσημου Εγγράφου
     *
     * @var string $countryDocumentId
     */
    private $countryDocumentId = null;

    /**
     * Gets as vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * Sets a new vatNumber
     *
     * @param string $vatNumber
     * @return self
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    /**
     * Gets as country
     *
     * Κωδ. Χώρας
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Κωδ. Χώρας
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as branch
     *
     * Αρ. Εγκατάστασης
     *
     * @return int
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Sets a new branch
     *
     * Αρ. Εγκατάστασης
     *
     * @param int $branch
     * @return self
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as address
     *
     * Διεύθυνση
     *
     * @return \Sofar\Aade\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Διεύθυνση
     *
     * @param \Sofar\Aade\AddressType $address
     * @return self
     */
    public function setAddress(?\Sofar\Aade\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as documentIdNo
     *
     * @return string
     */
    public function getDocumentIdNo()
    {
        return $this->documentIdNo;
    }

    /**
     * Sets a new documentIdNo
     *
     * @param string $documentIdNo
     * @return self
     */
    public function setDocumentIdNo($documentIdNo)
    {
        $this->documentIdNo = $documentIdNo;
        return $this;
    }

    /**
     * Gets as supplyAccountNo
     *
     * Αρ. Παροχής Ηλ. Ρεύματος
     *
     * @return string
     */
    public function getSupplyAccountNo()
    {
        return $this->supplyAccountNo;
    }

    /**
     * Sets a new supplyAccountNo
     *
     * Αρ. Παροχής Ηλ. Ρεύματος
     *
     * @param string $supplyAccountNo
     * @return self
     */
    public function setSupplyAccountNo($supplyAccountNo)
    {
        $this->supplyAccountNo = $supplyAccountNo;
        return $this;
    }

    /**
     * Gets as countryDocumentId
     *
     * Κωδ. Χώρας Έκδοσης Επίσημου Εγγράφου
     *
     * @return string
     */
    public function getCountryDocumentId()
    {
        return $this->countryDocumentId;
    }

    /**
     * Sets a new countryDocumentId
     *
     * Κωδ. Χώρας Έκδοσης Επίσημου Εγγράφου
     *
     * @param string $countryDocumentId
     * @return self
     */
    public function setCountryDocumentId($countryDocumentId)
    {
        $this->countryDocumentId = $countryDocumentId;
        return $this;
    }
}

