<?php

namespace Sofar\Aade;

/**
 * Class representing PaymentMethodType
 *
 *
 * XSD Type: PaymentMethodType
 */
class PaymentMethodType
{
    /**
     * Μοναδικός Αριθμός Καταχώρησης Παραστατικού
     *
     * @var int $invoiceMark
     */
    private $invoiceMark = null;

    /**
     * Αποδεικτικό Λήψης Τρόπων Πληρωμής. Συμπληρώνεται από την Υπηρεσία
     *
     * @var int $paymentMethodMark
     */
    private $paymentMethodMark = null;

    /**
     * ΑΦΜ Οντότητας Αναφοράς
     *
     * @var string $entityVatNumber
     */
    private $entityVatNumber = null;

    /**
     * @var \Sofar\Aade\PaymentMethodDetailType[] $paymentMethodDetails
     */
    private $paymentMethodDetails = [
        
    ];

    /**
     * Gets as invoiceMark
     *
     * Μοναδικός Αριθμός Καταχώρησης Παραστατικού
     *
     * @return int
     */
    public function getInvoiceMark()
    {
        return $this->invoiceMark;
    }

    /**
     * Sets a new invoiceMark
     *
     * Μοναδικός Αριθμός Καταχώρησης Παραστατικού
     *
     * @param int $invoiceMark
     * @return self
     */
    public function setInvoiceMark($invoiceMark)
    {
        $this->invoiceMark = $invoiceMark;
        return $this;
    }

    /**
     * Gets as paymentMethodMark
     *
     * Αποδεικτικό Λήψης Τρόπων Πληρωμής. Συμπληρώνεται από την Υπηρεσία
     *
     * @return int
     */
    public function getPaymentMethodMark()
    {
        return $this->paymentMethodMark;
    }

    /**
     * Sets a new paymentMethodMark
     *
     * Αποδεικτικό Λήψης Τρόπων Πληρωμής. Συμπληρώνεται από την Υπηρεσία
     *
     * @param int $paymentMethodMark
     * @return self
     */
    public function setPaymentMethodMark($paymentMethodMark)
    {
        $this->paymentMethodMark = $paymentMethodMark;
        return $this;
    }

    /**
     * Gets as entityVatNumber
     *
     * ΑΦΜ Οντότητας Αναφοράς
     *
     * @return string
     */
    public function getEntityVatNumber()
    {
        return $this->entityVatNumber;
    }

    /**
     * Sets a new entityVatNumber
     *
     * ΑΦΜ Οντότητας Αναφοράς
     *
     * @param string $entityVatNumber
     * @return self
     */
    public function setEntityVatNumber($entityVatNumber)
    {
        $this->entityVatNumber = $entityVatNumber;
        return $this;
    }

    /**
     * Adds as paymentMethodDetails
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
     * @return \Sofar\Aade\PaymentMethodDetailType[]
     */
    public function getPaymentMethodDetails()
    {
        return $this->paymentMethodDetails;
    }

    /**
     * Sets a new paymentMethodDetails
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

