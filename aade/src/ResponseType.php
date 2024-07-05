<?php

namespace Sofar\Aade;

/**
 * Class representing ResponseType
 *
 *
 * XSD Type: ResponseType
 */
class ResponseType
{
    /**
     * ΑΑ γραμμής οντότητας
     *
     * @var int $index
     */
    private $index = null;

    /**
     * Αναγνωριστικό οντότητας
     *
     * @var string $invoiceUid
     */
    private $invoiceUid = null;

    /**
     * Μοναδικός Αριθμός Καταχώρησης παραστατικού
     *
     * @var int $invoiceMark
     */
    private $invoiceMark = null;

    /**
     * QR Code Url
     *
     * @var string $qrUrl
     */
    private $qrUrl = null;

    /**
     * Μοναδικός Αριθμός Παραλαβής Χαρακτηρισμού
     *
     * @var int $classificationMark
     */
    private $classificationMark = null;

    /**
     * Μοναδικός Αριθμός Ακύρωσης
     *
     * @var int $cancellationMark
     */
    private $cancellationMark = null;

    /**
     * Μοναδικός Αριθμός Παραλαβής Τρόπου Πληρωμής
     *
     * @var int $paymentMethodMark
     */
    private $paymentMethodMark = null;

    /**
     * Συμβολοσειρά Αυθεντικοποίησης Παρόχου
     *
     * @var string $authenticationCode
     */
    private $authenticationCode = null;

    /**
     * Πάροχοι Λήπτη
     *
     * @var \Sofar\Aade\ReceptionProvidersType $receptionProviders
     */
    private $receptionProviders = null;

    /**
     * Email Παραλαβής
     *
     * @var \Sofar\Aade\ReceptionEmailsType $receptionEmails
     */
    private $receptionEmails = null;

    /**
     * Λίστα Σφαλμάτων
     *
     * @var \Sofar\Aade\ErrorType[] $errors
     */
    private $errors = null;

    /**
     * Κωδικός αποτελέσματος
     *
     * @var string $statusCode
     */
    private $statusCode = null;

    /**
     * Gets as index
     *
     * ΑΑ γραμμής οντότητας
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * ΑΑ γραμμής οντότητας
     *
     * @param int $index
     * @return self
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * Gets as invoiceUid
     *
     * Αναγνωριστικό οντότητας
     *
     * @return string
     */
    public function getInvoiceUid()
    {
        return $this->invoiceUid;
    }

    /**
     * Sets a new invoiceUid
     *
     * Αναγνωριστικό οντότητας
     *
     * @param string $invoiceUid
     * @return self
     */
    public function setInvoiceUid($invoiceUid)
    {
        $this->invoiceUid = $invoiceUid;
        return $this;
    }

    /**
     * Gets as invoiceMark
     *
     * Μοναδικός Αριθμός Καταχώρησης παραστατικού
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
     * Μοναδικός Αριθμός Καταχώρησης παραστατικού
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
     * Gets as qrUrl
     *
     * QR Code Url
     *
     * @return string
     */
    public function getQrUrl()
    {
        return $this->qrUrl;
    }

    /**
     * Sets a new qrUrl
     *
     * QR Code Url
     *
     * @param string $qrUrl
     * @return self
     */
    public function setQrUrl($qrUrl)
    {
        $this->qrUrl = $qrUrl;
        return $this;
    }

    /**
     * Gets as classificationMark
     *
     * Μοναδικός Αριθμός Παραλαβής Χαρακτηρισμού
     *
     * @return int
     */
    public function getClassificationMark()
    {
        return $this->classificationMark;
    }

    /**
     * Sets a new classificationMark
     *
     * Μοναδικός Αριθμός Παραλαβής Χαρακτηρισμού
     *
     * @param int $classificationMark
     * @return self
     */
    public function setClassificationMark($classificationMark)
    {
        $this->classificationMark = $classificationMark;
        return $this;
    }

    /**
     * Gets as cancellationMark
     *
     * Μοναδικός Αριθμός Ακύρωσης
     *
     * @return int
     */
    public function getCancellationMark()
    {
        return $this->cancellationMark;
    }

    /**
     * Sets a new cancellationMark
     *
     * Μοναδικός Αριθμός Ακύρωσης
     *
     * @param int $cancellationMark
     * @return self
     */
    public function setCancellationMark($cancellationMark)
    {
        $this->cancellationMark = $cancellationMark;
        return $this;
    }

    /**
     * Gets as paymentMethodMark
     *
     * Μοναδικός Αριθμός Παραλαβής Τρόπου Πληρωμής
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
     * Μοναδικός Αριθμός Παραλαβής Τρόπου Πληρωμής
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
     * Gets as authenticationCode
     *
     * Συμβολοσειρά Αυθεντικοποίησης Παρόχου
     *
     * @return string
     */
    public function getAuthenticationCode()
    {
        return $this->authenticationCode;
    }

    /**
     * Sets a new authenticationCode
     *
     * Συμβολοσειρά Αυθεντικοποίησης Παρόχου
     *
     * @param string $authenticationCode
     * @return self
     */
    public function setAuthenticationCode($authenticationCode)
    {
        $this->authenticationCode = $authenticationCode;
        return $this;
    }

    /**
     * Gets as receptionProviders
     *
     * Πάροχοι Λήπτη
     *
     * @return \Sofar\Aade\ReceptionProvidersType
     */
    public function getReceptionProviders()
    {
        return $this->receptionProviders;
    }

    /**
     * Sets a new receptionProviders
     *
     * Πάροχοι Λήπτη
     *
     * @param \Sofar\Aade\ReceptionProvidersType $receptionProviders
     * @return self
     */
    public function setReceptionProviders(?\Sofar\Aade\ReceptionProvidersType $receptionProviders = null)
    {
        $this->receptionProviders = $receptionProviders;
        return $this;
    }

    /**
     * Gets as receptionEmails
     *
     * Email Παραλαβής
     *
     * @return \Sofar\Aade\ReceptionEmailsType
     */
    public function getReceptionEmails()
    {
        return $this->receptionEmails;
    }

    /**
     * Sets a new receptionEmails
     *
     * Email Παραλαβής
     *
     * @param \Sofar\Aade\ReceptionEmailsType $receptionEmails
     * @return self
     */
    public function setReceptionEmails(?\Sofar\Aade\ReceptionEmailsType $receptionEmails = null)
    {
        $this->receptionEmails = $receptionEmails;
        return $this;
    }

    /**
     * Adds as error
     *
     * Λίστα Σφαλμάτων
     *
     * @return self
     * @param \Sofar\Aade\ErrorType $error
     */
    public function addToErrors(\Sofar\Aade\ErrorType $error)
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * isset errors
     *
     * Λίστα Σφαλμάτων
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * Λίστα Σφαλμάτων
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * Λίστα Σφαλμάτων
     *
     * @return \Sofar\Aade\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * Λίστα Σφαλμάτων
     *
     * @param \Sofar\Aade\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as statusCode
     *
     * Κωδικός αποτελέσματος
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * Κωδικός αποτελέσματος
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
}

