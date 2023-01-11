<?php

namespace Sofar\Aade;

/**
 * Class representing ShipType
 *
 *
 * XSD Type: ShipType
 */
class ShipType
{
    /**
     * Αριθμός Δήλωσης διενέργειας δραστηριότητας
     *
     * @var string $applicationId
     */
    private $applicationId = null;

    /**
     * Ημερομηνία Δήλωσης
     *
     * @var \DateTime $applicationDate
     */
    private $applicationDate = null;

    /**
     * @var string $doy
     */
    private $doy = null;

    /**
     * Στοιχεία Πλοίου
     *
     * @var string $shipId
     */
    private $shipId = null;

    /**
     * Gets as applicationId
     *
     * Αριθμός Δήλωσης διενέργειας δραστηριότητας
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Sets a new applicationId
     *
     * Αριθμός Δήλωσης διενέργειας δραστηριότητας
     *
     * @param string $applicationId
     * @return self
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * Gets as applicationDate
     *
     * Ημερομηνία Δήλωσης
     *
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->applicationDate;
    }

    /**
     * Sets a new applicationDate
     *
     * Ημερομηνία Δήλωσης
     *
     * @param \DateTime $applicationDate
     * @return self
     */
    public function setApplicationDate(\DateTime $applicationDate)
    {
        $this->applicationDate = $applicationDate;
        return $this;
    }

    /**
     * Gets as doy
     *
     * @return string
     */
    public function getDoy()
    {
        return $this->doy;
    }

    /**
     * Sets a new doy
     *
     * @param string $doy
     * @return self
     */
    public function setDoy($doy)
    {
        $this->doy = $doy;
        return $this;
    }

    /**
     * Gets as shipId
     *
     * Στοιχεία Πλοίου
     *
     * @return string
     */
    public function getShipId()
    {
        return $this->shipId;
    }

    /**
     * Sets a new shipId
     *
     * Στοιχεία Πλοίου
     *
     * @param string $shipId
     * @return self
     */
    public function setShipId($shipId)
    {
        $this->shipId = $shipId;
        return $this;
    }
}

