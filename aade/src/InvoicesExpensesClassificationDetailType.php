<?php

namespace Sofar\Aade;

/**
 * Class representing InvoicesExpensesClassificationDetailType
 *
 *
 * XSD Type: InvoicesExpensesClassificationDetailType
 */
class InvoicesExpensesClassificationDetailType
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
     * @var \Sofar\Aade\ExpensesClassificationType[] $expensesClassificationDetailData
     */
    private $expensesClassificationDetailData = [
        
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
     * Adds as expensesClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @return self
     * @param \Sofar\Aade\ExpensesClassificationType $expensesClassificationDetailData
     */
    public function addToExpensesClassificationDetailData(\Sofar\Aade\ExpensesClassificationType $expensesClassificationDetailData)
    {
        $this->expensesClassificationDetailData[] = $expensesClassificationDetailData;
        return $this;
    }

    /**
     * isset expensesClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpensesClassificationDetailData($index)
    {
        return isset($this->expensesClassificationDetailData[$index]);
    }

    /**
     * unset expensesClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpensesClassificationDetailData($index)
    {
        unset($this->expensesClassificationDetailData[$index]);
    }

    /**
     * Gets as expensesClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @return \Sofar\Aade\ExpensesClassificationType[]
     */
    public function getExpensesClassificationDetailData()
    {
        return $this->expensesClassificationDetailData;
    }

    /**
     * Sets a new expensesClassificationDetailData
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param \Sofar\Aade\ExpensesClassificationType[] $expensesClassificationDetailData
     * @return self
     */
    public function setExpensesClassificationDetailData(array $expensesClassificationDetailData)
    {
        $this->expensesClassificationDetailData = $expensesClassificationDetailData;
        return $this;
    }
}

