<?php

namespace Sofar\Aade;

/**
 * Class representing InvoiceExpensesClassificationType
 *
 *
 * XSD Type: InvoiceExpensesClassificationType
 */
class InvoiceExpensesClassificationType
{
    /**
     * Μοναδικός Αριθμός Καταχώρησης Παραστατικού
     *
     * @var int $invoiceMark
     */
    private $invoiceMark = null;

    /**
     * Αποδεικτικό Λήψης Χαρακτηρισμού Εξόδων. Συμπληρώνεται από την Υπηρεσία
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
     * @var \Sofar\Aade\InvoicesExpensesClassificationDetailType[] $invoicesExpensesClassificationDetails
     */
    private $invoicesExpensesClassificationDetails = [
        
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
     * Αποδεικτικό Λήψης Χαρακτηρισμού Εξόδων. Συμπληρώνεται από την Υπηρεσία
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
     * Αποδεικτικό Λήψης Χαρακτηρισμού Εξόδων. Συμπληρώνεται από την Υπηρεσία
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
     * Adds as invoicesExpensesClassificationDetails
     *
     * @return self
     * @param \Sofar\Aade\InvoicesExpensesClassificationDetailType $invoicesExpensesClassificationDetails
     */
    public function addToInvoicesExpensesClassificationDetails(\Sofar\Aade\InvoicesExpensesClassificationDetailType $invoicesExpensesClassificationDetails)
    {
        $this->invoicesExpensesClassificationDetails[] = $invoicesExpensesClassificationDetails;
        return $this;
    }

    /**
     * isset invoicesExpensesClassificationDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicesExpensesClassificationDetails($index)
    {
        return isset($this->invoicesExpensesClassificationDetails[$index]);
    }

    /**
     * unset invoicesExpensesClassificationDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicesExpensesClassificationDetails($index)
    {
        unset($this->invoicesExpensesClassificationDetails[$index]);
    }

    /**
     * Gets as invoicesExpensesClassificationDetails
     *
     * @return \Sofar\Aade\InvoicesExpensesClassificationDetailType[]
     */
    public function getInvoicesExpensesClassificationDetails()
    {
        return $this->invoicesExpensesClassificationDetails;
    }

    /**
     * Sets a new invoicesExpensesClassificationDetails
     *
     * @param \Sofar\Aade\InvoicesExpensesClassificationDetailType[] $invoicesExpensesClassificationDetails
     * @return self
     */
    public function setInvoicesExpensesClassificationDetails(array $invoicesExpensesClassificationDetails = null)
    {
        $this->invoicesExpensesClassificationDetails = $invoicesExpensesClassificationDetails;
        return $this;
    }
}

