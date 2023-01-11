<?php

namespace Sofar\Aade;

/**
 * Class representing ContinuationTokenType
 *
 *
 * XSD Type: continuationTokenType
 */
class ContinuationTokenType
{
    /**
     * @var string $nextPartitionKey
     */
    private $nextPartitionKey = null;

    /**
     * @var string $nextRowKey
     */
    private $nextRowKey = null;

    /**
     * Gets as nextPartitionKey
     *
     * @return string
     */
    public function getNextPartitionKey()
    {
        return $this->nextPartitionKey;
    }

    /**
     * Sets a new nextPartitionKey
     *
     * @param string $nextPartitionKey
     * @return self
     */
    public function setNextPartitionKey($nextPartitionKey)
    {
        $this->nextPartitionKey = $nextPartitionKey;
        return $this;
    }

    /**
     * Gets as nextRowKey
     *
     * @return string
     */
    public function getNextRowKey()
    {
        return $this->nextRowKey;
    }

    /**
     * Sets a new nextRowKey
     *
     * @param string $nextRowKey
     * @return self
     */
    public function setNextRowKey($nextRowKey)
    {
        $this->nextRowKey = $nextRowKey;
        return $this;
    }
}

