<?php

namespace Sofar\Aade;

/**
 * Class representing InvoiceProviderType
 *
 *
 * XSD Type: InvoiceProviderType
 */
class InvoiceProviderType
{
    /**
     * ΑΦΜ Εκδότη
     *
     * @var string $issuerVAT
     */
    private $issuerVAT = null;

    /**
     * Μοναδικός Αριθμός Καταχώρησης παραστατικού Παρόχου
     *
     * @var int $invoiceProviderMark
     */
    private $invoiceProviderMark = null;

    /**
     * Αναγνωριστικό οντότητας
     *
     * @var string $invoiceUid
     */
    private $invoiceUid = null;

    /**
     * Συμβολοσειρά Αυθεντικοποίησης Παραστατικού Παρόχου
     *
     * @var string $authenticationCode
     */
    private $authenticationCode = null;

    /**
     * Gets as issuerVAT
     *
     * ΑΦΜ Εκδότη
     *
     * @return string
     */
    public function getIssuerVAT()
    {
        return $this->issuerVAT;
    }

    /**
     * Sets a new issuerVAT
     *
     * ΑΦΜ Εκδότη
     *
     * @param string $issuerVAT
     * @return self
     */
    public function setIssuerVAT($issuerVAT)
    {
        $this->issuerVAT = $issuerVAT;
        return $this;
    }

    /**
     * Gets as invoiceProviderMark
     *
     * Μοναδικός Αριθμός Καταχώρησης παραστατικού Παρόχου
     *
     * @return int
     */
    public function getInvoiceProviderMark()
    {
        return $this->invoiceProviderMark;
    }

    /**
     * Sets a new invoiceProviderMark
     *
     * Μοναδικός Αριθμός Καταχώρησης παραστατικού Παρόχου
     *
     * @param int $invoiceProviderMark
     * @return self
     */
    public function setInvoiceProviderMark($invoiceProviderMark)
    {
        $this->invoiceProviderMark = $invoiceProviderMark;
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
     * Gets as authenticationCode
     *
     * Συμβολοσειρά Αυθεντικοποίησης Παραστατικού Παρόχου
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
     * Συμβολοσειρά Αυθεντικοποίησης Παραστατικού Παρόχου
     *
     * @param string $authenticationCode
     * @return self
     */
    public function setAuthenticationCode($authenticationCode)
    {
        $this->authenticationCode = $authenticationCode;
        return $this;
    }
}

