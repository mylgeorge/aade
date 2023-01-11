<?php

namespace Sofar\Aade\AadeBookInvoiceType;

/**
 * Class representing PaymentMethodsAType
 */
class PaymentMethodsAType
{
    /**
     * Στοιχεία Πληρωμών
     *
     * @var \Sofar\Aade\PaymentMethodDetailType[] $paymentMethodDetails
     */
    private $paymentMethodDetails = [
        
    ];

    /**
     * Adds as paymentMethodDetails
     *
     * Στοιχεία Πληρωμών
     *
     * @return self
     * @param \Sofar\Aade\PaymentMethodDetailType $paymentMethodDetails
     */
    public function addToPaymentMethodDetails(\Sofar\Aade\PaymentMethodDetailType $paymentMethodDetails)
    {
        $this->paymentMethodDetails[] = $paymentMethodDetails;
        return $this;
    }

    /**
     * isset paymentMethodDetails
     *
     * Στοιχεία Πληρωμών
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMethodDetails($index)
    {
        return isset($this->paymentMethodDetails[$index]);
    }

    /**
     * unset paymentMethodDetails
     *
     * Στοιχεία Πληρωμών
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMethodDetails($index)
    {
        unset($this->paymentMethodDetails[$index]);
    }

    /**
     * Gets as paymentMethodDetails
     *
     * Στοιχεία Πληρωμών
     *
     * @return \Sofar\Aade\PaymentMethodDetailType[]
     */
    public function getPaymentMethodDetails()
    {
        return $this->paymentMethodDetails;
    }

    /**
     * Sets a new paymentMethodDetails
     *
     * Στοιχεία Πληρωμών
     *
     * @param \Sofar\Aade\PaymentMethodDetailType[] $paymentMethodDetails
     * @return self
     */
    public function setPaymentMethodDetails(array $paymentMethodDetails)
    {
        $this->paymentMethodDetails = $paymentMethodDetails;
        return $this;
    }
}

