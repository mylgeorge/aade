<?php

namespace Sofar\Aade;

/**
 * Class representing ExpensesClassificationType
 *
 *
 * XSD Type: ExpensesClassificationType
 */
class ExpensesClassificationType
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
     * Πόσο Φόρου
     *
     * @var float $vatAmount
     */
    private $vatAmount = null;

    /**
     * Κατηγορία ΦΠΑ
     *
     * @var int $vatCategory
     */
    private $vatCategory = null;

    /**
     * Κατηγορία Εξαίρεσης ΦΠΑ
     *
     * @var int $vatExemptionCategory
     */
    private $vatExemptionCategory = null;

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
     * Gets as vatAmount
     *
     * Πόσο Φόρου
     *
     * @return float
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }

    /**
     * Sets a new vatAmount
     *
     * Πόσο Φόρου
     *
     * @param float $vatAmount
     * @return self
     */
    public function setVatAmount($vatAmount)
    {
        $this->vatAmount = $vatAmount;
        return $this;
    }

    /**
     * Gets as vatCategory
     *
     * Κατηγορία ΦΠΑ
     *
     * @return int
     */
    public function getVatCategory()
    {
        return $this->vatCategory;
    }

    /**
     * Sets a new vatCategory
     *
     * Κατηγορία ΦΠΑ
     *
     * @param int $vatCategory
     * @return self
     */
    public function setVatCategory($vatCategory)
    {
        $this->vatCategory = $vatCategory;
        return $this;
    }

    /**
     * Gets as vatExemptionCategory
     *
     * Κατηγορία Εξαίρεσης ΦΠΑ
     *
     * @return int
     */
    public function getVatExemptionCategory()
    {
        return $this->vatExemptionCategory;
    }

    /**
     * Sets a new vatExemptionCategory
     *
     * Κατηγορία Εξαίρεσης ΦΠΑ
     *
     * @param int $vatExemptionCategory
     * @return self
     */
    public function setVatExemptionCategory($vatExemptionCategory)
    {
        $this->vatExemptionCategory = $vatExemptionCategory;
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

