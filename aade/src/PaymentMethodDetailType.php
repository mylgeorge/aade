<?php

namespace Sofar\Aade;

/**
 * Class representing PaymentMethodDetailType
 *
 *
 * XSD Type: PaymentMethodDetailType
 */
class PaymentMethodDetailType
{
    /**
     * Τύπος Πληρωμής
     *
     * @var int $type
     */
    private $type = null;

    /**
     * Αναλογούν Ποσό
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * Λοιπές Πληροφορίες
     *
     * @var string $paymentMethodInfo
     */
    private $paymentMethodInfo = null;

    /**
     * Gets as type
     *
     * Τύπος Πληρωμής
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Τύπος Πληρωμής
     *
     * @param int $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Αναλογούν Ποσό
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Αναλογούν Ποσό
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as paymentMethodInfo
     *
     * Λοιπές Πληροφορίες
     *
     * @return string
     */
    public function getPaymentMethodInfo()
    {
        return $this->paymentMethodInfo;
    }

    /**
     * Sets a new paymentMethodInfo
     *
     * Λοιπές Πληροφορίες
     *
     * @param string $paymentMethodInfo
     * @return self
     */
    public function setPaymentMethodInfo($paymentMethodInfo)
    {
        $this->paymentMethodInfo = $paymentMethodInfo;
        return $this;
    }
}

