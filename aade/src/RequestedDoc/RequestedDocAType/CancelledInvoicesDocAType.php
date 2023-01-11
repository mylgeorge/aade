<?php

namespace Sofar\Aade\RequestedDoc\RequestedDocAType;

/**
 * Class representing CancelledInvoicesDocAType
 */
class CancelledInvoicesDocAType
{
    /**
     * @var \Sofar\Aade\CancelledInvoiceType[] $cancelledInvoice
     */
    private $cancelledInvoice = [
        
    ];

    /**
     * Adds as cancelledInvoice
     *
     * @return self
     * @param \Sofar\Aade\CancelledInvoiceType $cancelledInvoice
     */
    public function addToCancelledInvoice(\Sofar\Aade\CancelledInvoiceType $cancelledInvoice)
    {
        $this->cancelledInvoice[] = $cancelledInvoice;
        return $this;
    }

    /**
     * isset cancelledInvoice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancelledInvoice($index)
    {
        return isset($this->cancelledInvoice[$index]);
    }

    /**
     * unset cancelledInvoice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancelledInvoice($index)
    {
        unset($this->cancelledInvoice[$index]);
    }

    /**
     * Gets as cancelledInvoice
     *
     * @return \Sofar\Aade\CancelledInvoiceType[]
     */
    public function getCancelledInvoice()
    {
        return $this->cancelledInvoice;
    }

    /**
     * Sets a new cancelledInvoice
     *
     * @param \Sofar\Aade\CancelledInvoiceType[] $cancelledInvoice
     * @return self
     */
    public function setCancelledInvoice(array $cancelledInvoice = null)
    {
        $this->cancelledInvoice = $cancelledInvoice;
        return $this;
    }
}

