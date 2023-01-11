<?php

namespace Sofar\Aade;

/**
 * Class representing InvoiceRowType
 *
 *
 * XSD Type: InvoiceRowType
 */
class InvoiceRowType
{
    /**
     * ΑΑ Γραμμής
     *
     * @var int $lineNumber
     */
    private $lineNumber = null;

    /**
     * Είδος Γραμμής
     *
     * @var int $recType
     */
    private $recType = null;

    /**
     * Περιγραφή Είδους
     *
     * @var string $itemDescr
     */
    private $itemDescr = null;

    /**
     * Κωδικός Καυσίμου
     *
     * @var string $fuelCode
     */
    private $fuelCode = null;

    /**
     * Ποσότητα
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Είδος Ποσότητας
     *
     * @var int $measurementUnit
     */
    private $measurementUnit = null;

    /**
     * Επισήμανση
     *
     * @var int $invoiceDetailType
     */
    private $invoiceDetailType = null;

    /**
     * Καθαρή Αξία
     *
     * @var float $netValue
     */
    private $netValue = null;

    /**
     * Κατηγορία ΦΠΑ
     *
     * @var int $vatCategory
     */
    private $vatCategory = null;

    /**
     * Ποσό ΦΠΑ
     *
     * @var float $vatAmount
     */
    private $vatAmount = null;

    /**
     * Κατηγορία Αιτίας Εξαίρεσης ΦΠΑ
     *
     * @var int $vatExemptionCategory
     */
    private $vatExemptionCategory = null;

    /**
     * ΠΟΛ 1177/2018 Αρ. 27
     *
     * @var \Sofar\Aade\ShipType $dienergia
     */
    private $dienergia = null;

    /**
     * Δικαίωμα Έκπτωσης
     *
     * @var bool $discountOption
     */
    private $discountOption = null;

    /**
     * Ποσό Παρ. Φόρου
     *
     * @var float $withheldAmount
     */
    private $withheldAmount = null;

    /**
     * Κατηγορία Συντελεστή Παρ. Φόρου
     *
     * @var int $withheldPercentCategory
     */
    private $withheldPercentCategory = null;

    /**
     * Ποσό Χαρτοσήμου
     *
     * @var float $stampDutyAmount
     */
    private $stampDutyAmount = null;

    /**
     * Κατηγορία Συντελεστή Χαρτοσήμου
     *
     * @var int $stampDutyPercentCategory
     */
    private $stampDutyPercentCategory = null;

    /**
     * Ποσό Τελών
     *
     * @var float $feesAmount
     */
    private $feesAmount = null;

    /**
     * Κατηγορία Συντελεστή Τελών
     *
     * @var int $feesPercentCategory
     */
    private $feesPercentCategory = null;

    /**
     * Κατηγορία Συντελεστή Λοιπών Φόρων
     *
     * @var int $otherTaxesPercentCategory
     */
    private $otherTaxesPercentCategory = null;

    /**
     * Ποσό Φόρου Διαμονης
     *
     * @var float $otherTaxesAmount
     */
    private $otherTaxesAmount = null;

    /**
     * Ποσό Κρατήσεων
     *
     * @var float $deductionsAmount
     */
    private $deductionsAmount = null;

    /**
     * Σχόλια Γραμμής
     *
     * @var string $lineComments
     */
    private $lineComments = null;

    /**
     * Λίστα Χαρακτηρισμών Εσόδων
     *
     * @var \Sofar\Aade\IncomeClassificationType[] $incomeClassification
     */
    private $incomeClassification = [
        
    ];

    /**
     * Λίστα Χαρακτηρισμού Εξόδων
     *
     * @var \Sofar\Aade\ExpensesClassificationType[] $expensesClassification
     */
    private $expensesClassification = [
        
    ];

    /**
     * Ποσότητα Θερμοκρασίας 15 βαθμών
     *
     * @var float $quantity15
     */
    private $quantity15 = null;

    /**
     * Gets as lineNumber
     *
     * ΑΑ Γραμμής
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
     * ΑΑ Γραμμής
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
     * Gets as recType
     *
     * Είδος Γραμμής
     *
     * @return int
     */
    public function getRecType()
    {
        return $this->recType;
    }

    /**
     * Sets a new recType
     *
     * Είδος Γραμμής
     *
     * @param int $recType
     * @return self
     */
    public function setRecType($recType)
    {
        $this->recType = $recType;
        return $this;
    }

    /**
     * Gets as itemDescr
     *
     * Περιγραφή Είδους
     *
     * @return string
     */
    public function getItemDescr()
    {
        return $this->itemDescr;
    }

    /**
     * Sets a new itemDescr
     *
     * Περιγραφή Είδους
     *
     * @param string $itemDescr
     * @return self
     */
    public function setItemDescr($itemDescr)
    {
        $this->itemDescr = $itemDescr;
        return $this;
    }

    /**
     * Gets as fuelCode
     *
     * Κωδικός Καυσίμου
     *
     * @return string
     */
    public function getFuelCode()
    {
        return $this->fuelCode;
    }

    /**
     * Sets a new fuelCode
     *
     * Κωδικός Καυσίμου
     *
     * @param string $fuelCode
     * @return self
     */
    public function setFuelCode($fuelCode)
    {
        $this->fuelCode = $fuelCode;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Ποσότητα
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Ποσότητα
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as measurementUnit
     *
     * Είδος Ποσότητας
     *
     * @return int
     */
    public function getMeasurementUnit()
    {
        return $this->measurementUnit;
    }

    /**
     * Sets a new measurementUnit
     *
     * Είδος Ποσότητας
     *
     * @param int $measurementUnit
     * @return self
     */
    public function setMeasurementUnit($measurementUnit)
    {
        $this->measurementUnit = $measurementUnit;
        return $this;
    }

    /**
     * Gets as invoiceDetailType
     *
     * Επισήμανση
     *
     * @return int
     */
    public function getInvoiceDetailType()
    {
        return $this->invoiceDetailType;
    }

    /**
     * Sets a new invoiceDetailType
     *
     * Επισήμανση
     *
     * @param int $invoiceDetailType
     * @return self
     */
    public function setInvoiceDetailType($invoiceDetailType)
    {
        $this->invoiceDetailType = $invoiceDetailType;
        return $this;
    }

    /**
     * Gets as netValue
     *
     * Καθαρή Αξία
     *
     * @return float
     */
    public function getNetValue()
    {
        return $this->netValue;
    }

    /**
     * Sets a new netValue
     *
     * Καθαρή Αξία
     *
     * @param float $netValue
     * @return self
     */
    public function setNetValue($netValue)
    {
        $this->netValue = $netValue;
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
     * Gets as vatAmount
     *
     * Ποσό ΦΠΑ
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
     * Ποσό ΦΠΑ
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
     * Gets as vatExemptionCategory
     *
     * Κατηγορία Αιτίας Εξαίρεσης ΦΠΑ
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
     * Κατηγορία Αιτίας Εξαίρεσης ΦΠΑ
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
     * Gets as dienergia
     *
     * ΠΟΛ 1177/2018 Αρ. 27
     *
     * @return \Sofar\Aade\ShipType
     */
    public function getDienergia()
    {
        return $this->dienergia;
    }

    /**
     * Sets a new dienergia
     *
     * ΠΟΛ 1177/2018 Αρ. 27
     *
     * @param \Sofar\Aade\ShipType $dienergia
     * @return self
     */
    public function setDienergia(?\Sofar\Aade\ShipType $dienergia = null)
    {
        $this->dienergia = $dienergia;
        return $this;
    }

    /**
     * Gets as discountOption
     *
     * Δικαίωμα Έκπτωσης
     *
     * @return bool
     */
    public function getDiscountOption()
    {
        return $this->discountOption;
    }

    /**
     * Sets a new discountOption
     *
     * Δικαίωμα Έκπτωσης
     *
     * @param bool $discountOption
     * @return self
     */
    public function setDiscountOption($discountOption)
    {
        $this->discountOption = $discountOption;
        return $this;
    }

    /**
     * Gets as withheldAmount
     *
     * Ποσό Παρ. Φόρου
     *
     * @return float
     */
    public function getWithheldAmount()
    {
        return $this->withheldAmount;
    }

    /**
     * Sets a new withheldAmount
     *
     * Ποσό Παρ. Φόρου
     *
     * @param float $withheldAmount
     * @return self
     */
    public function setWithheldAmount($withheldAmount)
    {
        $this->withheldAmount = $withheldAmount;
        return $this;
    }

    /**
     * Gets as withheldPercentCategory
     *
     * Κατηγορία Συντελεστή Παρ. Φόρου
     *
     * @return int
     */
    public function getWithheldPercentCategory()
    {
        return $this->withheldPercentCategory;
    }

    /**
     * Sets a new withheldPercentCategory
     *
     * Κατηγορία Συντελεστή Παρ. Φόρου
     *
     * @param int $withheldPercentCategory
     * @return self
     */
    public function setWithheldPercentCategory($withheldPercentCategory)
    {
        $this->withheldPercentCategory = $withheldPercentCategory;
        return $this;
    }

    /**
     * Gets as stampDutyAmount
     *
     * Ποσό Χαρτοσήμου
     *
     * @return float
     */
    public function getStampDutyAmount()
    {
        return $this->stampDutyAmount;
    }

    /**
     * Sets a new stampDutyAmount
     *
     * Ποσό Χαρτοσήμου
     *
     * @param float $stampDutyAmount
     * @return self
     */
    public function setStampDutyAmount($stampDutyAmount)
    {
        $this->stampDutyAmount = $stampDutyAmount;
        return $this;
    }

    /**
     * Gets as stampDutyPercentCategory
     *
     * Κατηγορία Συντελεστή Χαρτοσήμου
     *
     * @return int
     */
    public function getStampDutyPercentCategory()
    {
        return $this->stampDutyPercentCategory;
    }

    /**
     * Sets a new stampDutyPercentCategory
     *
     * Κατηγορία Συντελεστή Χαρτοσήμου
     *
     * @param int $stampDutyPercentCategory
     * @return self
     */
    public function setStampDutyPercentCategory($stampDutyPercentCategory)
    {
        $this->stampDutyPercentCategory = $stampDutyPercentCategory;
        return $this;
    }

    /**
     * Gets as feesAmount
     *
     * Ποσό Τελών
     *
     * @return float
     */
    public function getFeesAmount()
    {
        return $this->feesAmount;
    }

    /**
     * Sets a new feesAmount
     *
     * Ποσό Τελών
     *
     * @param float $feesAmount
     * @return self
     */
    public function setFeesAmount($feesAmount)
    {
        $this->feesAmount = $feesAmount;
        return $this;
    }

    /**
     * Gets as feesPercentCategory
     *
     * Κατηγορία Συντελεστή Τελών
     *
     * @return int
     */
    public function getFeesPercentCategory()
    {
        return $this->feesPercentCategory;
    }

    /**
     * Sets a new feesPercentCategory
     *
     * Κατηγορία Συντελεστή Τελών
     *
     * @param int $feesPercentCategory
     * @return self
     */
    public function setFeesPercentCategory($feesPercentCategory)
    {
        $this->feesPercentCategory = $feesPercentCategory;
        return $this;
    }

    /**
     * Gets as otherTaxesPercentCategory
     *
     * Κατηγορία Συντελεστή Λοιπών Φόρων
     *
     * @return int
     */
    public function getOtherTaxesPercentCategory()
    {
        return $this->otherTaxesPercentCategory;
    }

    /**
     * Sets a new otherTaxesPercentCategory
     *
     * Κατηγορία Συντελεστή Λοιπών Φόρων
     *
     * @param int $otherTaxesPercentCategory
     * @return self
     */
    public function setOtherTaxesPercentCategory($otherTaxesPercentCategory)
    {
        $this->otherTaxesPercentCategory = $otherTaxesPercentCategory;
        return $this;
    }

    /**
     * Gets as otherTaxesAmount
     *
     * Ποσό Φόρου Διαμονης
     *
     * @return float
     */
    public function getOtherTaxesAmount()
    {
        return $this->otherTaxesAmount;
    }

    /**
     * Sets a new otherTaxesAmount
     *
     * Ποσό Φόρου Διαμονης
     *
     * @param float $otherTaxesAmount
     * @return self
     */
    public function setOtherTaxesAmount($otherTaxesAmount)
    {
        $this->otherTaxesAmount = $otherTaxesAmount;
        return $this;
    }

    /**
     * Gets as deductionsAmount
     *
     * Ποσό Κρατήσεων
     *
     * @return float
     */
    public function getDeductionsAmount()
    {
        return $this->deductionsAmount;
    }

    /**
     * Sets a new deductionsAmount
     *
     * Ποσό Κρατήσεων
     *
     * @param float $deductionsAmount
     * @return self
     */
    public function setDeductionsAmount($deductionsAmount)
    {
        $this->deductionsAmount = $deductionsAmount;
        return $this;
    }

    /**
     * Gets as lineComments
     *
     * Σχόλια Γραμμής
     *
     * @return string
     */
    public function getLineComments()
    {
        return $this->lineComments;
    }

    /**
     * Sets a new lineComments
     *
     * Σχόλια Γραμμής
     *
     * @param string $lineComments
     * @return self
     */
    public function setLineComments($lineComments)
    {
        $this->lineComments = $lineComments;
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
     * Λίστα Χαρακτηρισμού Εξόδων
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
     * Λίστα Χαρακτηρισμού Εξόδων
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
     * Λίστα Χαρακτηρισμού Εξόδων
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
     * Λίστα Χαρακτηρισμού Εξόδων
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
     * Λίστα Χαρακτηρισμού Εξόδων
     *
     * @param \Sofar\Aade\ExpensesClassificationType[] $expensesClassification
     * @return self
     */
    public function setExpensesClassification(array $expensesClassification = null)
    {
        $this->expensesClassification = $expensesClassification;
        return $this;
    }

    /**
     * Gets as quantity15
     *
     * Ποσότητα Θερμοκρασίας 15 βαθμών
     *
     * @return float
     */
    public function getQuantity15()
    {
        return $this->quantity15;
    }

    /**
     * Sets a new quantity15
     *
     * Ποσότητα Θερμοκρασίας 15 βαθμών
     *
     * @param float $quantity15
     * @return self
     */
    public function setQuantity15($quantity15)
    {
        $this->quantity15 = $quantity15;
        return $this;
    }
}

