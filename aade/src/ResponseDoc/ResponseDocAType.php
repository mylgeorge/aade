<?php

namespace Sofar\Aade\ResponseDoc;

/**
 * Class representing ResponseDocAType
 */
class ResponseDocAType
{
    /**
     * @var \Sofar\Aade\ResponseType $response
     */
    private $response = null;

    /**
     * Gets as response
     *
     * @return \Sofar\Aade\ResponseType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \Sofar\Aade\ResponseType $response
     * @return self
     */
    public function setResponse(\Sofar\Aade\ResponseType $response)
    {
        $this->response = $response;
        return $this;
    }
}

