<?php

namespace Sofar\Aade;

/**
 * Class representing InvoiceIncomeClassificationType
 *
 *
 * XSD Type: InvoiceIncomeClassificationType
 */
class InvoiceIncomeClassificationType
{
    /**
     * Μοναδικός Αριθμός Καταχώρησης Παραστατικού
     *
     * @var int $invoiceMark
     */
    private $invoiceMark = null;

    /**
     * Αποδεικτικό Λήψης Χαρακτηρισμού Εσόδων. Συμπληρώνεται από την Υπηρεσία
     *
     * @var int $classificationMark
     */
    private $classificationMark = null;

    /**
     * ΑΦΜ Οντότητας Αναφοράς
     *
     * @var string $entityVatNumber
     */
    private $entityVatNumber = null;

    /**
     * Αιτιολογία Συναλλαγής
     *
     * @var int $transactionMode
     */
    private $transactionMode = null;

    /**
     * @var \Sofar\Aade\InvoicesIncomeClassificationDetailType[] $invoicesIncomeClassificationDetails
     */
    private $invoicesIncomeClassificationDetails = [
        
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
     * Gets as classificationMark
     *
     * Αποδεικτικό Λήψης Χαρακτηρισμού Εσόδων. Συμπληρώνεται από την Υπηρεσία
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
     * Αποδεικτικό Λήψης Χαρακτηρισμού Εσόδων. Συμπληρώνεται από την Υπηρεσία
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
     * Gets as transactionMode
     *
     * Αιτιολογία Συναλλαγής
     *
     * @return int
     */
    public function getTransactionMode()
    {
        return $this->transactionMode;
    }

    /**
     * Sets a new transactionMode
     *
     * Αιτιολογία Συναλλαγής
     *
     * @param int $transactionMode
     * @return self
     */
    public function setTransactionMode($transactionMode)
    {
        $this->transactionMode = $transactionMode;
        return $this;
    }

    /**
     * Adds as invoicesIncomeClassificationDetails
     *
     * @return self
     * @param \Sofar\Aade\InvoicesIncomeClassificationDetailType $invoicesIncomeClassificationDetails
     */
    public function addToInvoicesIncomeClassificationDetails(\Sofar\Aade\InvoicesIncomeClassificationDetailType $invoicesIncomeClassificationDetails)
    {
        $this->invoicesIncomeClassificationDetails[] = $invoicesIncomeClassificationDetails;
        return $this;
    }

    /**
     * isset invoicesIncomeClassificationDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicesIncomeClassificationDetails($index)
    {
        return isset($this->invoicesIncomeClassificationDetails[$index]);
    }

    /**
     * unset invoicesIncomeClassificationDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicesIncomeClassificationDetails($index)
    {
        unset($this->invoicesIncomeClassificationDetails[$index]);
    }

    /**
     * Gets as invoicesIncomeClassificationDetails
     *
     * @return \Sofar\Aade\InvoicesIncomeClassificationDetailType[]
     */
    public function getInvoicesIncomeClassificationDetails()
    {
        return $this->invoicesIncomeClassificationDetails;
    }

    /**
     * Sets a new invoicesIncomeClassificationDetails
     *
     * @param \Sofar\Aade\InvoicesIncomeClassificationDetailType[] $invoicesIncomeClassificationDetails
     * @return self
     */
    public function setInvoicesIncomeClassificationDetails(array $invoicesIncomeClassificationDetails = null)
    {
        $this->invoicesIncomeClassificationDetails = $invoicesIncomeClassificationDetails;
        return $this;
    }
}

