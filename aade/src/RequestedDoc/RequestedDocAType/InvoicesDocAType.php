<?php

namespace Sofar\Aade\RequestedDoc\RequestedDocAType;

/**
 * Class representing InvoicesDocAType
 */
class InvoicesDocAType
{
    /**
     * @var \Sofar\Aade\AadeBookInvoiceType $invoice
     */
    private $invoice = null;

    /**
     * Gets as invoice
     *
     * @return \Sofar\Aade\AadeBookInvoiceType
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice
     *
     * @param \Sofar\Aade\AadeBookInvoiceType $invoice
     * @return self
     */
    public function setInvoice(?\Sofar\Aade\AadeBookInvoiceType $invoice = null)
    {
        $this->invoice = $invoice;
        return $this;
    }
}

