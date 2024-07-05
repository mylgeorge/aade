<?php

namespace Sofar\Aade\PaymentMethodsDoc;

/**
 * Class representing PaymentMethodsDocAType
 */
class PaymentMethodsDocAType
{
    /**
     * @var \Sofar\Aade\PaymentMethodType $paymentMethods
     */
    private $paymentMethods = null;

    /**
     * Gets as paymentMethods
     *
     * @return \Sofar\Aade\PaymentMethodType
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Sets a new paymentMethods
     *
     * @param \Sofar\Aade\PaymentMethodType $paymentMethods
     * @return self
     */
    public function setPaymentMethods(\Sofar\Aade\PaymentMethodType $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
}

