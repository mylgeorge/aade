<?php

namespace Sofar\Aade\RequestedDoc\RequestedDocAType;

/**
 * Class representing CancelledInvoicesDocAType
 */
class CancelledInvoicesDocAType
{
    /**
     * @var \Sofar\Aade\CancelledInvoiceType $cancelledInvoice
     */
    private $cancelledInvoice = null;

    /**
     * Gets as cancelledInvoice
     *
     * @return \Sofar\Aade\CancelledInvoiceType
     */
    public function getCancelledInvoice()
    {
        return $this->cancelledInvoice;
    }

    /**
     * Sets a new cancelledInvoice
     *
     * @param \Sofar\Aade\CancelledInvoiceType $cancelledInvoice
     * @return self
     */
    public function setCancelledInvoice(?\Sofar\Aade\CancelledInvoiceType $cancelledInvoice = null)
    {
        $this->cancelledInvoice = $cancelledInvoice;
        return $this;
    }
}

