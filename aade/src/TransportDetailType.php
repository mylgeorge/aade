<?php

namespace Sofar\Aade;

/**
 * Class representing TransportDetailType
 *
 *
 * XSD Type: TransportDetailType
 */
class TransportDetailType
{
    /**
     * Αριθμός Μεταφορικού Μέσου
     *
     * @var string $vehicleNumber
     */
    private $vehicleNumber = null;

    /**
     * Gets as vehicleNumber
     *
     * Αριθμός Μεταφορικού Μέσου
     *
     * @return string
     */
    public function getVehicleNumber()
    {
        return $this->vehicleNumber;
    }

    /**
     * Sets a new vehicleNumber
     *
     * Αριθμός Μεταφορικού Μέσου
     *
     * @param string $vehicleNumber
     * @return self
     */
    public function setVehicleNumber($vehicleNumber)
    {
        $this->vehicleNumber = $vehicleNumber;
        return $this;
    }
}

