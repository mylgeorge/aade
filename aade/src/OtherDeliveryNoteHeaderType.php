<?php

namespace Sofar\Aade;

/**
 * Class representing OtherDeliveryNoteHeaderType
 *
 *
 * XSD Type: OtherDeliveryNoteHeaderType
 */
class OtherDeliveryNoteHeaderType
{
    /**
     * Διεύθυνση Φόρτωσης
     *
     * @var \Sofar\Aade\AddressType $loadingAddress
     */
    private $loadingAddress = null;

    /**
     * Διεύθυνση Παράδοσης
     *
     * @var \Sofar\Aade\AddressType $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * Εγκατάσταση έναρξης διακίνησης (Εκδότη)
     *
     * @var int $startShippingBranch
     */
    private $startShippingBranch = null;

    /**
     * Εγκατάσταση ολοκλήρωσης διακίνησης (Λήπτη)
     *
     * @var int $completeShippingBranch
     */
    private $completeShippingBranch = null;

    /**
     * Gets as loadingAddress
     *
     * Διεύθυνση Φόρτωσης
     *
     * @return \Sofar\Aade\AddressType
     */
    public function getLoadingAddress()
    {
        return $this->loadingAddress;
    }

    /**
     * Sets a new loadingAddress
     *
     * Διεύθυνση Φόρτωσης
     *
     * @param \Sofar\Aade\AddressType $loadingAddress
     * @return self
     */
    public function setLoadingAddress(\Sofar\Aade\AddressType $loadingAddress)
    {
        $this->loadingAddress = $loadingAddress;
        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * Διεύθυνση Παράδοσης
     *
     * @return \Sofar\Aade\AddressType
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * Διεύθυνση Παράδοσης
     *
     * @param \Sofar\Aade\AddressType $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(\Sofar\Aade\AddressType $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as startShippingBranch
     *
     * Εγκατάσταση έναρξης διακίνησης (Εκδότη)
     *
     * @return int
     */
    public function getStartShippingBranch()
    {
        return $this->startShippingBranch;
    }

    /**
     * Sets a new startShippingBranch
     *
     * Εγκατάσταση έναρξης διακίνησης (Εκδότη)
     *
     * @param int $startShippingBranch
     * @return self
     */
    public function setStartShippingBranch($startShippingBranch)
    {
        $this->startShippingBranch = $startShippingBranch;
        return $this;
    }

    /**
     * Gets as completeShippingBranch
     *
     * Εγκατάσταση ολοκλήρωσης διακίνησης (Λήπτη)
     *
     * @return int
     */
    public function getCompleteShippingBranch()
    {
        return $this->completeShippingBranch;
    }

    /**
     * Sets a new completeShippingBranch
     *
     * Εγκατάσταση ολοκλήρωσης διακίνησης (Λήπτη)
     *
     * @param int $completeShippingBranch
     * @return self
     */
    public function setCompleteShippingBranch($completeShippingBranch)
    {
        $this->completeShippingBranch = $completeShippingBranch;
        return $this;
    }
}

