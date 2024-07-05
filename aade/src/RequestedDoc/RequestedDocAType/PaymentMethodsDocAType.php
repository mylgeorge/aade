<?php

namespace Sofar\Aade\RequestedDoc\RequestedDocAType;

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
    public function setPaymentMethods(?\Sofar\Aade\PaymentMethodType $paymentMethods = null)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
}

