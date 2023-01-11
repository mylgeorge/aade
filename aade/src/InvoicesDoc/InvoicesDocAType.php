<?php

namespace Sofar\Aade\InvoicesDoc;

/**
 * Class representing InvoicesDocAType
 */
class InvoicesDocAType
{
    /**
     * @var \Sofar\Aade\AadeBookInvoiceType[] $invoice
     */
    private $invoice = [
        
    ];

    /**
     * Adds as invoice
     *
     * @return self
     * @param \Sofar\Aade\AadeBookInvoiceType $invoice
     */
    public function addToInvoice(\Sofar\Aade\AadeBookInvoiceType $invoice)
    {
        $this->invoice[] = $invoice;
        return $this;
    }

    /**
     * isset invoice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoice($index)
    {
        return isset($this->invoice[$index]);
    }

    /**
     * unset invoice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoice($index)
    {
        unset($this->invoice[$index]);
    }

    /**
     * Gets as invoice
     *
     * @return \Sofar\Aade\AadeBookInvoiceType[]
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice
     *
     * @param \Sofar\Aade\AadeBookInvoiceType[] $invoice
     * @return self
     */
    public function setInvoice(array $invoice)
    {
        $this->invoice = $invoice;
        return $this;
    }
}

