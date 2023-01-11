<?php

namespace Sofar\Aade;

/**
 * Class representing InvoicesIncomeClassificationDetailType
 *
 *
 * XSD Type: InvoicesIncomeClassificationDetailType
 */
class InvoicesIncomeClassificationDetailType
{
    /**
     * Γραμμή Παραστατικού
     *
     * @var int $lineNumber
     */
    private $lineNumber = null;

    /**
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @var \Sofar\Aade\IncomeClassificationType[] $incomeClassificationDetailData
     */
    private $incomeClassificationDetailData = [
        
    ];

    /**
     * Gets as lineNumber
     *
     * Γραμμή Παραστατικού
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * Sets a new lineNumber
     *
     * Γραμμή Παραστατικού
     *
     * @param int $lineNumber
     * @return self
     */
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }

    /**
     * Adds as incomeClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @return self
     * @param \Sofar\Aade\IncomeClassificationType $incomeClassificationDetailData
     */
    public function addToIncomeClassificationDetailData(\Sofar\Aade\IncomeClassificationType $incomeClassificationDetailData)
    {
        $this->incomeClassificationDetailData[] = $incomeClassificationDetailData;
        return $this;
    }

    /**
     * isset incomeClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncomeClassificationDetailData($index)
    {
        return isset($this->incomeClassificationDetailData[$index]);
    }

    /**
     * unset incomeClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncomeClassificationDetailData($index)
    {
        unset($this->incomeClassificationDetailData[$index]);
    }

    /**
     * Gets as incomeClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @return \Sofar\Aade\IncomeClassificationType[]
     */
    public function getIncomeClassificationDetailData()
    {
        return $this->incomeClassificationDetailData;
    }

    /**
     * Sets a new incomeClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param \Sofar\Aade\IncomeClassificationType[] $incomeClassificationDetailData
     * @return self
     */
    public function setIncomeClassificationDetailData(array $incomeClassificationDetailData)
    {
        $this->incomeClassificationDetailData = $incomeClassificationDetailData;
        return $this;
    }
}

