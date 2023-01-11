<?php

namespace Sofar\Aade\ResponseDoc;

/**
 * Class representing ResponseDocAType
 */
class ResponseDocAType
{
    /**
     * @var \Sofar\Aade\ResponseType[] $response
     */
    private $response = [
        
    ];

    /**
     * Adds as response
     *
     * @return self
     * @param \Sofar\Aade\ResponseType $response
     */
    public function addToResponse(\Sofar\Aade\ResponseType $response)
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * isset response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponse($index)
    {
        return isset($this->response[$index]);
    }

    /**
     * unset response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponse($index)
    {
        unset($this->response[$index]);
    }

    /**
     * Gets as response
     *
     * @return \Sofar\Aade\ResponseType[]
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \Sofar\Aade\ResponseType[] $response
     * @return self
     */
    public function setResponse(array $response)
    {
        $this->response = $response;
        return $this;
    }
}

