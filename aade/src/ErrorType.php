<?php

namespace Sofar\Aade;

/**
 * Class representing ErrorType
 *
 *
 * XSD Type: ErrorType
 */
class ErrorType
{
    /**
     * Μήνυμα Σφάλματος
     *
     * @var string $message
     */
    private $message = null;

    /**
     * Κωδικός Σφάλαματος
     *
     * @var int $code
     */
    private $code = null;

    /**
     * Gets as message
     *
     * Μήνυμα Σφάλματος
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * Μήνυμα Σφάλματος
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as code
     *
     * Κωδικός Σφάλαματος
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Κωδικός Σφάλαματος
     *
     * @param int $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}

