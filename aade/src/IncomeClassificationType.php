<?php

namespace Sofar\Aade;

/**
 * Class representing IncomeClassificationType
 *
 *
 * XSD Type: IncomeClassificationType
 */
class IncomeClassificationType
{
    /**
     * Κωδικός Χαρακτηρισμού
     *
     * @var string $classificationType
     */
    private $classificationType = null;

    /**
     * Κατηγορία Χαρακτηρισμού
     *
     * @var string $classificationCategory
     */
    private $classificationCategory = null;

    /**
     * Ποσό Χαρακτηρισμού
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * Μοναδικός Αριθμός Χαρακτηρισμού
     *
     * @var string $id
     */
    private $id = null;

    /**
     * Gets as classificationType
     *
     * Κωδικός Χαρακτηρισμού
     *
     * @return string
     */
    public function getClassificationType()
    {
        return $this->classificationType;
    }

    /**
     * Sets a new classificationType
     *
     * Κωδικός Χαρακτηρισμού
     *
     * @param string $classificationType
     * @return self
     */
    public function setClassificationType($classificationType)
    {
        $this->classificationType = $classificationType;
        return $this;
    }

    /**
     * Gets as classificationCategory
     *
     * Κατηγορία Χαρακτηρισμού
     *
     * @return string
     */
    public function getClassificationCategory()
    {
        return $this->classificationCategory;
    }

    /**
     * Sets a new classificationCategory
     *
     * Κατηγορία Χαρακτηρισμού
     *
     * @param string $classificationCategory
     * @return self
     */
    public function setClassificationCategory($classificationCategory)
    {
        $this->classificationCategory = $classificationCategory;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Ποσό Χαρακτηρισμού
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Ποσό Χαρακτηρισμού
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as id
     *
     * Μοναδικός Αριθμός Χαρακτηρισμού
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Μοναδικός Αριθμός Χαρακτηρισμού
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

