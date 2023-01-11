<?php

namespace Sofar\Aade;

/**
 * Class representing CancelledInvoiceType
 *
 *
 * XSD Type: CancelledInvoiceType
 */
class CancelledInvoiceType
{
    /**
     * Μοναδικός Αριθμός Καταχώρησης του ακυρωμένου Παραστατικού
     *
     * @var int $invoiceMark
     */
    private $invoiceMark = null;

    /**
     * Μοναδικός Αριθμός Καταχώρησης της Ακύρωσης
     *
     * @var int $cancellationMark
     */
    private $cancellationMark = null;

    /**
     * Ημερομηνία Ακύρωσης Παραστατικού
     *
     * @var \DateTime $cancellationDate
     */
    private $cancellationDate = null;

    /**
     * Gets as invoiceMark
     *
     * Μοναδικός Αριθμός Καταχώρησης του ακυρωμένου Παραστατικού
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
     * Μοναδικός Αριθμός Καταχώρησης του ακυρωμένου Παραστατικού
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
     * Gets as cancellationMark
     *
     * Μοναδικός Αριθμός Καταχώρησης της Ακύρωσης
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
     * Μοναδικός Αριθμός Καταχώρησης της Ακύρωσης
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
     * Gets as cancellationDate
     *
     * Ημερομηνία Ακύρωσης Παραστατικού
     *
     * @return \DateTime
     */
    public function getCancellationDate()
    {
        return $this->cancellationDate;
    }

    /**
     * Sets a new cancellationDate
     *
     * Ημερομηνία Ακύρωσης Παραστατικού
     *
     * @param \DateTime $cancellationDate
     * @return self
     */
    public function setCancellationDate(\DateTime $cancellationDate)
    {
        $this->cancellationDate = $cancellationDate;
        return $this;
    }
}

