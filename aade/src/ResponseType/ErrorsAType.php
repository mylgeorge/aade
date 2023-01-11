<?php

namespace Sofar\Aade\ResponseType;

/**
 * Class representing ErrorsAType
 */
class ErrorsAType
{
    /**
     * @var \Sofar\Aade\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as error
     *
     * @return self
     * @param \Sofar\Aade\ErrorType $error
     */
    public function addToError(\Sofar\Aade\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \Sofar\Aade\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \Sofar\Aade\ErrorType[] $error
     * @return self
     */
    public function setError(array $error = null)
    {
        $this->error = $error;
        return $this;
    }
}

