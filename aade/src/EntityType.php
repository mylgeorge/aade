<?php

namespace Sofar\Aade;

/**
 * Class representing EntityType
 *
 *
 * XSD Type: EntityType
 */
class EntityType
{
    /**
     * Κατηγορία
     *
     * @var int $type
     */
    private $type = null;

    /**
     * Στοιχεία Οντότητας
     *
     * @var \Sofar\Aade\PartyType $entityData
     */
    private $entityData = null;

    /**
     * Gets as type
     *
     * Κατηγορία
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Κατηγορία
     *
     * @param int $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as entityData
     *
     * Στοιχεία Οντότητας
     *
     * @return \Sofar\Aade\PartyType
     */
    public function getEntityData()
    {
        return $this->entityData;
    }

    /**
     * Sets a new entityData
     *
     * Στοιχεία Οντότητας
     *
     * @param \Sofar\Aade\PartyType $entityData
     * @return self
     */
    public function setEntityData(\Sofar\Aade\PartyType $entityData)
    {
        $this->entityData = $entityData;
        return $this;
    }
}

