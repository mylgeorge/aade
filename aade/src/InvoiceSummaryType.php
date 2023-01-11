<?php

namespace Sofar\Aade;

/**
 * Class representing InvoiceSummaryType
 *
 *
 * XSD Type: InvoiceSummaryType
 */
class InvoiceSummaryType
{
    /**
     * Σύνολο Καθαρής Αξίας
     *
     * @var float $totalNetValue
     */
    private $totalNetValue = null;

    /**
     * Σύνολο ΦΠΑ
     *
     * @var float $totalVatAmount
     */
    private $totalVatAmount = null;

    /**
     * Σύνολο Παρ. Φόρων
     *
     * @var float $totalWithheldAmount
     */
    private $totalWithheldAmount = null;

    /**
     * Σύνολο Τελών
     *
     * @var float $totalFeesAmount
     */
    private $totalFeesAmount = null;

    /**
     * Σύνολο Χαρτοσήμου
     *
     * @var float $totalStampDutyAmount
     */
    private $totalStampDutyAmount = null;

    /**
     * Σύνολο Λοιπών Φόρων
     *
     * @var float $totalOtherTaxesAmount
     */
    private $totalOtherTaxesAmount = null;

    /**
     * Σύνολο Κρατήσεων
     *
     * @var float $totalDeductionsAmount
     */
    private $totalDeductionsAmount = null;

    /**
     * Συνολική Αξία
     *
     * @var float $totalGrossValue
     */
    private $totalGrossValue = null;

    /**
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @var \Sofar\Aade\IncomeClassificationType[] $incomeClassification
     */
    private $incomeClassification = [
        
    ];

    /**
     * @var \Sofar\Aade\ExpensesClassificationType[] $expensesClassification
     */
    private $expensesClassification = [
        
    ];

    /**
     * Gets as totalNetValue
     *
     * Σύνολο Καθαρής Αξίας
     *
     * @return float
     */
    public function getTotalNetValue()
    {
        return $this->totalNetValue;
    }

    /**
     * Sets a new totalNetValue
     *
     * Σύνολο Καθαρής Αξίας
     *
     * @param float $totalNetValue
     * @return self
     */
    public function setTotalNetValue($totalNetValue)
    {
        $this->totalNetValue = $totalNetValue;
        return $this;
    }

    /**
     * Gets as totalVatAmount
     *
     * Σύνολο ΦΠΑ
     *
     * @return float
     */
    public function getTotalVatAmount()
    {
        return $this->totalVatAmount;
    }

    /**
     * Sets a new totalVatAmount
     *
     * Σύνολο ΦΠΑ
     *
     * @param float $totalVatAmount
     * @return self
     */
    public function setTotalVatAmount($totalVatAmount)
    {
        $this->totalVatAmount = $totalVatAmount;
        return $this;
    }

    /**
     * Gets as totalWithheldAmount
     *
     * Σύνολο Παρ. Φόρων
     *
     * @return float
     */
    public function getTotalWithheldAmount()
    {
        return $this->totalWithheldAmount;
    }

    /**
     * Sets a new totalWithheldAmount
     *
     * Σύνολο Παρ. Φόρων
     *
     * @param float $totalWithheldAmount
     * @return self
     */
    public function setTotalWithheldAmount($totalWithheldAmount)
    {
        $this->totalWithheldAmount = $totalWithheldAmount;
        return $this;
    }

    /**
     * Gets as totalFeesAmount
     *
     * Σύνολο Τελών
     *
     * @return float
     */
    public function getTotalFeesAmount()
    {
        return $this->totalFeesAmount;
    }

    /**
     * Sets a new totalFeesAmount
     *
     * Σύνολο Τελών
     *
     * @param float $totalFeesAmount
     * @return self
     */
    public function setTotalFeesAmount($totalFeesAmount)
    {
        $this->totalFeesAmount = $totalFeesAmount;
        return $this;
    }

    /**
     * Gets as totalStampDutyAmount
     *
     * Σύνολο Χαρτοσήμου
     *
     * @return float
     */
    public function getTotalStampDutyAmount()
    {
        return $this->totalStampDutyAmount;
    }

    /**
     * Sets a new totalStampDutyAmount
     *
     * Σύνολο Χαρτοσήμου
     *
     * @param float $totalStampDutyAmount
     * @return self
     */
    public function setTotalStampDutyAmount($totalStampDutyAmount)
    {
        $this->totalStampDutyAmount = $totalStampDutyAmount;
        return $this;
    }

    /**
     * Gets as totalOtherTaxesAmount
     *
     * Σύνολο Λοιπών Φόρων
     *
     * @return float
     */
    public function getTotalOtherTaxesAmount()
    {
        return $this->totalOtherTaxesAmount;
    }

    /**
     * Sets a new totalOtherTaxesAmount
     *
     * Σύνολο Λοιπών Φόρων
     *
     * @param float $totalOtherTaxesAmount
     * @return self
     */
    public function setTotalOtherTaxesAmount($totalOtherTaxesAmount)
    {
        $this->totalOtherTaxesAmount = $totalOtherTaxesAmount;
        return $this;
    }

    /**
     * Gets as totalDeductionsAmount
     *
     * Σύνολο Κρατήσεων
     *
     * @return float
     */
    public function getTotalDeductionsAmount()
    {
        return $this->totalDeductionsAmount;
    }

    /**
     * Sets a new totalDeductionsAmount
     *
     * Σύνολο Κρατήσεων
     *
     * @param float $totalDeductionsAmount
     * @return self
     */
    public function setTotalDeductionsAmount($totalDeductionsAmount)
    {
        $this->totalDeductionsAmount = $totalDeductionsAmount;
        return $this;
    }

    /**
     * Gets as totalGrossValue
     *
     * Συνολική Αξία
     *
     * @return float
     */
    public function getTotalGrossValue()
    {
        return $this->totalGrossValue;
    }

    /**
     * Sets a new totalGrossValue
     *
     * Συνολική Αξία
     *
     * @param float $totalGrossValue
     * @return self
     */
    public function setTotalGrossValue($totalGrossValue)
    {
        $this->totalGrossValue = $totalGrossValue;
        return $this;
    }

    /**
     * Adds as incomeClassification
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @return self
     * @param \Sofar\Aade\IncomeClassificationType $incomeClassification
     */
    public function addToIncomeClassification(\Sofar\Aade\IncomeClassificationType $incomeClassification)
    {
        $this->incomeClassification[] = $incomeClassification;
        return $this;
    }

    /**
     * isset incomeClassification
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncomeClassification($index)
    {
        return isset($this->incomeClassification[$index]);
    }

    /**
     * unset incomeClassification
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncomeClassification($index)
    {
        unset($this->incomeClassification[$index]);
    }

    /**
     * Gets as incomeClassification
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @return \Sofar\Aade\IncomeClassificationType[]
     */
    public function getIncomeClassification()
    {
        return $this->incomeClassification;
    }

    /**
     * Sets a new incomeClassification
     *
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @param \Sofar\Aade\IncomeClassificationType[] $incomeClassification
     * @return self
     */
    public function setIncomeClassification(array $incomeClassification = null)
    {
        $this->incomeClassification = $incomeClassification;
        return $this;
    }

    /**
     * Adds as expensesClassification
     *
     * @return self
     * @param \Sofar\Aade\ExpensesClassificationType $expensesClassification
     */
    public function addToExpensesClassification(\Sofar\Aade\ExpensesClassificationType $expensesClassification)
    {
        $this->expensesClassification[] = $expensesClassification;
        return $this;
    }

    /**
     * isset expensesClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpensesClassification($index)
    {
        return isset($this->expensesClassification[$index]);
    }

    /**
     * unset expensesClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpensesClassification($index)
    {
        unset($this->expensesClassification[$index]);
    }

    /**
     * Gets as expensesClassification
     *
     * @return \Sofar\Aade\ExpensesClassificationType[]
     */
    public function getExpensesClassification()
    {
        return $this->expensesClassification;
    }

    /**
     * Sets a new expensesClassification
     *
     * @param \Sofar\Aade\ExpensesClassificationType[] $expensesClassification
     * @return self
     */
    public function setExpensesClassification(array $expensesClassification = null)
    {
        $this->expensesClassification = $expensesClassification;
        return $this;
    }
}

