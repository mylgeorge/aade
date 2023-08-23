<?php

namespace Sofar\Aade;

/**
 * Class representing AadeBookInvoiceType
 *
 *
 * XSD Type: AadeBookInvoiceType
 */
class AadeBookInvoiceType
{
    /**
     * Αναγνωριστικό Παραστατικού
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * Μοναδικός Αριθμός Καταχώρησης Παραστατικού
     *
     * @var int $mark
     */
    private $mark = null;

    /**
     * Μοναδικός Αριθμός Καταχώρησης Ακυρωτικού
     *
     * @var int $cancelledByMark
     */
    private $cancelledByMark = null;

    /**
     * Συμβολοσειρά Αυθεντικοποίησης Παρόχου
     *
     * @var string $authenticationCode
     */
    private $authenticationCode = null;

    /**
     * Αδυναμία Επικοινωνίας Παρόχου ή Αδυναμία διαβίβασης ERP
     *
     * @var string $transmissionFailure
     */
    private $transmissionFailure = null;

    /**
     * Στοιχεία Εκδότη
     *
     * @var \Sofar\Aade\PartyType $issuer
     */
    private $issuer = null;

    /**
     * Στοιχεία Λήπτη
     *
     * @var \Sofar\Aade\PartyType $counterpart
     */
    private $counterpart = null;

    /**
     * Γενικά Στοιχεία
     *
     * @var \Sofar\Aade\InvoiceHeaderType $invoiceHeader
     */
    private $invoiceHeader = null;

    /**
     * Πληρωμές
     *
     * @var \Sofar\Aade\PaymentMethodDetailType[] $paymentMethods
     */
    private $paymentMethods = null;

    /**
     * Λεπτομέρειες Παραστατικού
     *
     * @var \Sofar\Aade\InvoiceRowType[] $invoiceDetails
     */
    private $invoiceDetails = [
        
    ];

    /**
     * Σύνολα Φόρων
     *
     * @var \Sofar\Aade\TaxTotalsType[] $taxesTotals
     */
    private $taxesTotals = null;

    /**
     * Συγκεντρωτικά Στοιχεία
     *
     * @var \Sofar\Aade\InvoiceSummaryType $invoiceSummary
     */
    private $invoiceSummary = null;

    /**
     * QR Code Url
     *
     * @var string $qrCodeUrl
     */
    private $qrCodeUrl = null;

    /**
     * Λοιπές Λεπτομέρειες Διακίνησης (Ορισμός - Αλλαγή Μτφ Μέσων, Μεταφορτώσεις, κλπ)
     *
     * @var \Sofar\Aade\TransportDetailType[] $otherTransportDetails
     */
    private $otherTransportDetails = [
        
    ];

    /**
     * Gets as uid
     *
     * Αναγνωριστικό Παραστατικού
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * Αναγνωριστικό Παραστατικού
     *
     * @param string $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as mark
     *
     * Μοναδικός Αριθμός Καταχώρησης Παραστατικού
     *
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Sets a new mark
     *
     * Μοναδικός Αριθμός Καταχώρησης Παραστατικού
     *
     * @param int $mark
     * @return self
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
        return $this;
    }

    /**
     * Gets as cancelledByMark
     *
     * Μοναδικός Αριθμός Καταχώρησης Ακυρωτικού
     *
     * @return int
     */
    public function getCancelledByMark()
    {
        return $this->cancelledByMark;
    }

    /**
     * Sets a new cancelledByMark
     *
     * Μοναδικός Αριθμός Καταχώρησης Ακυρωτικού
     *
     * @param int $cancelledByMark
     * @return self
     */
    public function setCancelledByMark($cancelledByMark)
    {
        $this->cancelledByMark = $cancelledByMark;
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
     * Gets as transmissionFailure
     *
     * Αδυναμία Επικοινωνίας Παρόχου ή Αδυναμία διαβίβασης ERP
     *
     * @return string
     */
    public function getTransmissionFailure()
    {
        return $this->transmissionFailure;
    }

    /**
     * Sets a new transmissionFailure
     *
     * Αδυναμία Επικοινωνίας Παρόχου ή Αδυναμία διαβίβασης ERP
     *
     * @param string $transmissionFailure
     * @return self
     */
    public function setTransmissionFailure($transmissionFailure)
    {
        $this->transmissionFailure = $transmissionFailure;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * Στοιχεία Εκδότη
     *
     * @return \Sofar\Aade\PartyType
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * Στοιχεία Εκδότη
     *
     * @param \Sofar\Aade\PartyType $issuer
     * @return self
     */
    public function setIssuer(?\Sofar\Aade\PartyType $issuer = null)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as counterpart
     *
     * Στοιχεία Λήπτη
     *
     * @return \Sofar\Aade\PartyType
     */
    public function getCounterpart()
    {
        return $this->counterpart;
    }

    /**
     * Sets a new counterpart
     *
     * Στοιχεία Λήπτη
     *
     * @param \Sofar\Aade\PartyType $counterpart
     * @return self
     */
    public function setCounterpart(?\Sofar\Aade\PartyType $counterpart = null)
    {
        $this->counterpart = $counterpart;
        return $this;
    }

    /**
     * Gets as invoiceHeader
     *
     * Γενικά Στοιχεία
     *
     * @return \Sofar\Aade\InvoiceHeaderType
     */
    public function getInvoiceHeader()
    {
        return $this->invoiceHeader;
    }

    /**
     * Sets a new invoiceHeader
     *
     * Γενικά Στοιχεία
     *
     * @param \Sofar\Aade\InvoiceHeaderType $invoiceHeader
     * @return self
     */
    public function setInvoiceHeader(\Sofar\Aade\InvoiceHeaderType $invoiceHeader)
    {
        $this->invoiceHeader = $invoiceHeader;
        return $this;
    }

    /**
     * Adds as paymentMethodDetails
     *
     * Πληρωμές
     *
     * @return self
     * @param \Sofar\Aade\PaymentMethodDetailType $paymentMethodDetails
     */
    public function addToPaymentMethods(\Sofar\Aade\PaymentMethodDetailType $paymentMethodDetails)
    {
        $this->paymentMethods[] = $paymentMethodDetails;
        return $this;
    }

    /**
     * isset paymentMethods
     *
     * Πληρωμές
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMethods($index)
    {
        return isset($this->paymentMethods[$index]);
    }

    /**
     * unset paymentMethods
     *
     * Πληρωμές
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMethods($index)
    {
        unset($this->paymentMethods[$index]);
    }

    /**
     * Gets as paymentMethods
     *
     * Πληρωμές
     *
     * @return \Sofar\Aade\PaymentMethodDetailType[]
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Sets a new paymentMethods
     *
     * Πληρωμές
     *
     * @param \Sofar\Aade\PaymentMethodDetailType[] $paymentMethods
     * @return self
     */
    public function setPaymentMethods(array $paymentMethods = null)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    /**
     * Adds as invoiceDetails
     *
     * Λεπτομέρειες Παραστατικού
     *
     * @return self
     * @param \Sofar\Aade\InvoiceRowType $invoiceDetails
     */
    public function addToInvoiceDetails(\Sofar\Aade\InvoiceRowType $invoiceDetails)
    {
        $this->invoiceDetails[] = $invoiceDetails;
        return $this;
    }

    /**
     * isset invoiceDetails
     *
     * Λεπτομέρειες Παραστατικού
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceDetails($index)
    {
        return isset($this->invoiceDetails[$index]);
    }

    /**
     * unset invoiceDetails
     *
     * Λεπτομέρειες Παραστατικού
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceDetails($index)
    {
        unset($this->invoiceDetails[$index]);
    }

    /**
     * Gets as invoiceDetails
     *
     * Λεπτομέρειες Παραστατικού
     *
     * @return \Sofar\Aade\InvoiceRowType[]
     */
    public function getInvoiceDetails()
    {
        return $this->invoiceDetails;
    }

    /**
     * Sets a new invoiceDetails
     *
     * Λεπτομέρειες Παραστατικού
     *
     * @param \Sofar\Aade\InvoiceRowType[] $invoiceDetails
     * @return self
     */
    public function setInvoiceDetails(array $invoiceDetails)
    {
        $this->invoiceDetails = $invoiceDetails;
        return $this;
    }

    /**
     * Adds as taxes
     *
     * Σύνολα Φόρων
     *
     * @return self
     * @param \Sofar\Aade\TaxTotalsType $taxes
     */
    public function addToTaxesTotals(\Sofar\Aade\TaxTotalsType $taxes)
    {
        $this->taxesTotals[] = $taxes;
        return $this;
    }

    /**
     * isset taxesTotals
     *
     * Σύνολα Φόρων
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxesTotals($index)
    {
        return isset($this->taxesTotals[$index]);
    }

    /**
     * unset taxesTotals
     *
     * Σύνολα Φόρων
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxesTotals($index)
    {
        unset($this->taxesTotals[$index]);
    }

    /**
     * Gets as taxesTotals
     *
     * Σύνολα Φόρων
     *
     * @return \Sofar\Aade\TaxTotalsType[]
     */
    public function getTaxesTotals()
    {
        return $this->taxesTotals;
    }

    /**
     * Sets a new taxesTotals
     *
     * Σύνολα Φόρων
     *
     * @param \Sofar\Aade\TaxTotalsType[] $taxesTotals
     * @return self
     */
    public function setTaxesTotals(array $taxesTotals = null)
    {
        $this->taxesTotals = $taxesTotals;
        return $this;
    }

    /**
     * Gets as invoiceSummary
     *
     * Συγκεντρωτικά Στοιχεία
     *
     * @return \Sofar\Aade\InvoiceSummaryType
     */
    public function getInvoiceSummary()
    {
        return $this->invoiceSummary;
    }

    /**
     * Sets a new invoiceSummary
     *
     * Συγκεντρωτικά Στοιχεία
     *
     * @param \Sofar\Aade\InvoiceSummaryType $invoiceSummary
     * @return self
     */
    public function setInvoiceSummary(\Sofar\Aade\InvoiceSummaryType $invoiceSummary)
    {
        $this->invoiceSummary = $invoiceSummary;
        return $this;
    }

    /**
     * Gets as qrCodeUrl
     *
     * QR Code Url
     *
     * @return string
     */
    public function getQrCodeUrl()
    {
        return $this->qrCodeUrl;
    }

    /**
     * Sets a new qrCodeUrl
     *
     * QR Code Url
     *
     * @param string $qrCodeUrl
     * @return self
     */
    public function setQrCodeUrl($qrCodeUrl)
    {
        $this->qrCodeUrl = $qrCodeUrl;
        return $this;
    }

    /**
     * Adds as otherTransportDetails
     *
     * Λοιπές Λεπτομέρειες Διακίνησης (Ορισμός - Αλλαγή Μτφ Μέσων, Μεταφορτώσεις, κλπ)
     *
     * @return self
     * @param \Sofar\Aade\TransportDetailType $otherTransportDetails
     */
    public function addToOtherTransportDetails(\Sofar\Aade\TransportDetailType $otherTransportDetails)
    {
        $this->otherTransportDetails[] = $otherTransportDetails;
        return $this;
    }

    /**
     * isset otherTransportDetails
     *
     * Λοιπές Λεπτομέρειες Διακίνησης (Ορισμός - Αλλαγή Μτφ Μέσων, Μεταφορτώσεις, κλπ)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherTransportDetails($index)
    {
        return isset($this->otherTransportDetails[$index]);
    }

    /**
     * unset otherTransportDetails
     *
     * Λοιπές Λεπτομέρειες Διακίνησης (Ορισμός - Αλλαγή Μτφ Μέσων, Μεταφορτώσεις, κλπ)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherTransportDetails($index)
    {
        unset($this->otherTransportDetails[$index]);
    }

    /**
     * Gets as otherTransportDetails
     *
     * Λοιπές Λεπτομέρειες Διακίνησης (Ορισμός - Αλλαγή Μτφ Μέσων, Μεταφορτώσεις, κλπ)
     *
     * @return \Sofar\Aade\TransportDetailType[]
     */
    public function getOtherTransportDetails()
    {
        return $this->otherTransportDetails;
    }

    /**
     * Sets a new otherTransportDetails
     *
     * Λοιπές Λεπτομέρειες Διακίνησης (Ορισμός - Αλλαγή Μτφ Μέσων, Μεταφορτώσεις, κλπ)
     *
     * @param \Sofar\Aade\TransportDetailType[] $otherTransportDetails
     * @return self
     */
    public function setOtherTransportDetails(array $otherTransportDetails = null)
    {
        $this->otherTransportDetails = $otherTransportDetails;
        return $this;
    }
}

