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
     * Φιλοδώρημα
     *
     * @var float $tipAmount
     */
    private $tipAmount = null;

    /**
     * Μοναδική Ταυτότητα Πληρωμής
     *
     * @var string $transactionId
     */
    private $transactionId = null;

    /**
     * tid POS
     *
     * @var string $tid
     */
    private $tid = null;

    /**
     * Υπογραφή Πληρωμής Παρόχου
     *
     * @var \Sofar\Aade\ProviderSignatureType $providersSignature
     */
    private $providersSignature = null;

    /**
     * Υπογραφή Πληρωμής ΦΗΜ με σύστημα λογισμικού (ERP)
     *
     * @var \Sofar\Aade\ECRTokenType $eCRToken
     */
    private $eCRToken = null;

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

    /**
     * Gets as tipAmount
     *
     * Φιλοδώρημα
     *
     * @return float
     */
    public function getTipAmount()
    {
        return $this->tipAmount;
    }

    /**
     * Sets a new tipAmount
     *
     * Φιλοδώρημα
     *
     * @param float $tipAmount
     * @return self
     */
    public function setTipAmount($tipAmount)
    {
        $this->tipAmount = $tipAmount;
        return $this;
    }

    /**
     * Gets as transactionId
     *
     * Μοναδική Ταυτότητα Πληρωμής
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Sets a new transactionId
     *
     * Μοναδική Ταυτότητα Πληρωμής
     *
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * Gets as tid
     *
     * tid POS
     *
     * @return string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Sets a new tid
     *
     * tid POS
     *
     * @param string $tid
     * @return self
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
        return $this;
    }

    /**
     * Gets as providersSignature
     *
     * Υπογραφή Πληρωμής Παρόχου
     *
     * @return \Sofar\Aade\ProviderSignatureType
     */
    public function getProvidersSignature()
    {
        return $this->providersSignature;
    }

    /**
     * Sets a new providersSignature
     *
     * Υπογραφή Πληρωμής Παρόχου
     *
     * @param \Sofar\Aade\ProviderSignatureType $providersSignature
     * @return self
     */
    public function setProvidersSignature(?\Sofar\Aade\ProviderSignatureType $providersSignature = null)
    {
        $this->providersSignature = $providersSignature;
        return $this;
    }

    /**
     * Gets as eCRToken
     *
     * Υπογραφή Πληρωμής ΦΗΜ με σύστημα λογισμικού (ERP)
     *
     * @return \Sofar\Aade\ECRTokenType
     */
    public function getECRToken()
    {
        return $this->eCRToken;
    }

    /**
     * Sets a new eCRToken
     *
     * Υπογραφή Πληρωμής ΦΗΜ με σύστημα λογισμικού (ERP)
     *
     * @param \Sofar\Aade\ECRTokenType $eCRToken
     * @return self
     */
    public function setECRToken(?\Sofar\Aade\ECRTokenType $eCRToken = null)
    {
        $this->eCRToken = $eCRToken;
        return $this;
    }
}

