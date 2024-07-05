<?php

namespace Sofar\Aade;

/**
 * Class representing InvoiceHeaderType
 *
 *
 * XSD Type: InvoiceHeaderType
 */
class InvoiceHeaderType
{
    /**
     * Σειρά Παραστατικού
     *
     * @var string $series
     */
    private $series = null;

    /**
     * ΑΑ Παραστατικού
     *
     * @var string $aa
     */
    private $aa = null;

    /**
     * Ημερομηνία Έκδοσης
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * Είδος Παραστατικού
     *
     * @var string $invoiceType
     */
    private $invoiceType = null;

    /**
     * Αναστολή Καταβολής ΦΠΑ
     *
     * @var bool $vatPaymentSuspension
     */
    private $vatPaymentSuspension = null;

    /**
     * Νόμισμα
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Ισοτιμία
     *
     * @var float $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Συσχετιζόμενα Παραστατικά
     *
     * @var int[] $correlatedInvoices
     */
    private $correlatedInvoices = [
        
    ];

    /**
     * Ένδειξη Αυτοτιμολόγησης
     *
     * @var bool $selfPricing
     */
    private $selfPricing = null;

    /**
     * Ημερομηνία Έναρξης Αποστολής
     *
     * @var \DateTime $dispatchDate
     */
    private $dispatchDate = null;

    /**
     * Ώρα Έναρξης Αποστολής
     *
     * @var \DateTime $dispatchTime
     */
    private $dispatchTime = null;

    /**
     * Αριθμός Οχήματος
     *
     * @var string $vehicleNumber
     */
    private $vehicleNumber = null;

    /**
     * Σκοπός Διακίνησης
     *
     * @var int $movePurpose
     */
    private $movePurpose = null;

    /**
     * Παραστατικό Καυσίμων
     *
     * @var bool $fuelInvoice
     */
    private $fuelInvoice = null;

    /**
     * Ειδική Κατηγορία Παραστατικού
     *
     * @var int $specialInvoiceCategory
     */
    private $specialInvoiceCategory = null;

    /**
     * Τύπος Απόκλισης Παραστατικού
     *
     * @var int $invoiceVariationType
     */
    private $invoiceVariationType = null;

    /**
     * Λοιπές συσχετιζόμενες οντοτήτες
     *
     * @var \Sofar\Aade\EntityType[] $otherCorrelatedEntities
     */
    private $otherCorrelatedEntities = [
        
    ];

    /**
     * Λοιπά Γενικά Στοιχεία Διακίνησης
     *
     * @var \Sofar\Aade\OtherDeliveryNoteHeaderType $otherDeliveryNoteHeader
     */
    private $otherDeliveryNoteHeader = null;

    /**
     * Ένδειξη Παραστατικού Διακίνησης
     *
     * @var bool $isDeliveryNote
     */
    private $isDeliveryNote = null;

    /**
     * Τίτλος της Λοιπής Αιτίας Διακίνησης
     *
     * @var string $otherMovePurposeTitle
     */
    private $otherMovePurposeTitle = null;

    /**
     * Ένδειξη Εισπράξης Τρίτων
     *
     * @var bool $thirdPartyCollection
     */
    private $thirdPartyCollection = null;

    /**
     * Πολλαπλά Συνδεόμενα MARKs
     *
     * @var int[] $multipleConnectedMarks
     */
    private $multipleConnectedMarks = [
        
    ];

    /**
     * AA ΤΡΑΠΕΖΙOY (για Δελτία Παραγγελίας Εστίασης)
     *
     * @var string $tableAA
     */
    private $tableAA = null;

    /**
     * Ένδειξη συνολικής αναίρεσης Δελτίων Παραγελίας
     *
     * @var bool $totalCancelDeliveryOrders
     */
    private $totalCancelDeliveryOrders = null;

    /**
     * Gets as series
     *
     * Σειρά Παραστατικού
     *
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Sets a new series
     *
     * Σειρά Παραστατικού
     *
     * @param string $series
     * @return self
     */
    public function setSeries($series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * Gets as aa
     *
     * ΑΑ Παραστατικού
     *
     * @return string
     */
    public function getAa()
    {
        return $this->aa;
    }

    /**
     * Sets a new aa
     *
     * ΑΑ Παραστατικού
     *
     * @param string $aa
     * @return self
     */
    public function setAa($aa)
    {
        $this->aa = $aa;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * Ημερομηνία Έκδοσης
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * Ημερομηνία Έκδοσης
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as invoiceType
     *
     * Είδος Παραστατικού
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * Sets a new invoiceType
     *
     * Είδος Παραστατικού
     *
     * @param string $invoiceType
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * Gets as vatPaymentSuspension
     *
     * Αναστολή Καταβολής ΦΠΑ
     *
     * @return bool
     */
    public function getVatPaymentSuspension()
    {
        return $this->vatPaymentSuspension;
    }

    /**
     * Sets a new vatPaymentSuspension
     *
     * Αναστολή Καταβολής ΦΠΑ
     *
     * @param bool $vatPaymentSuspension
     * @return self
     */
    public function setVatPaymentSuspension($vatPaymentSuspension)
    {
        $this->vatPaymentSuspension = $vatPaymentSuspension;
        return $this;
    }

    /**
     * Gets as currency
     *
     * Νόμισμα
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Νόμισμα
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * Ισοτιμία
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * Ισοτιμία
     *
     * @param float $exchangeRate
     * @return self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as correlatedInvoices
     *
     * Συσχετιζόμενα Παραστατικά
     *
     * @return self
     * @param int $correlatedInvoices
     */
    public function addToCorrelatedInvoices($correlatedInvoices)
    {
        $this->correlatedInvoices[] = $correlatedInvoices;
        return $this;
    }

    /**
     * isset correlatedInvoices
     *
     * Συσχετιζόμενα Παραστατικά
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCorrelatedInvoices($index)
    {
        return isset($this->correlatedInvoices[$index]);
    }

    /**
     * unset correlatedInvoices
     *
     * Συσχετιζόμενα Παραστατικά
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCorrelatedInvoices($index)
    {
        unset($this->correlatedInvoices[$index]);
    }

    /**
     * Gets as correlatedInvoices
     *
     * Συσχετιζόμενα Παραστατικά
     *
     * @return int[]
     */
    public function getCorrelatedInvoices()
    {
        return $this->correlatedInvoices;
    }

    /**
     * Sets a new correlatedInvoices
     *
     * Συσχετιζόμενα Παραστατικά
     *
     * @param int[] $correlatedInvoices
     * @return self
     */
    public function setCorrelatedInvoices(array $correlatedInvoices = null)
    {
        $this->correlatedInvoices = $correlatedInvoices;
        return $this;
    }

    /**
     * Gets as selfPricing
     *
     * Ένδειξη Αυτοτιμολόγησης
     *
     * @return bool
     */
    public function getSelfPricing()
    {
        return $this->selfPricing;
    }

    /**
     * Sets a new selfPricing
     *
     * Ένδειξη Αυτοτιμολόγησης
     *
     * @param bool $selfPricing
     * @return self
     */
    public function setSelfPricing($selfPricing)
    {
        $this->selfPricing = $selfPricing;
        return $this;
    }

    /**
     * Gets as dispatchDate
     *
     * Ημερομηνία Έναρξης Αποστολής
     *
     * @return \DateTime
     */
    public function getDispatchDate()
    {
        return $this->dispatchDate;
    }

    /**
     * Sets a new dispatchDate
     *
     * Ημερομηνία Έναρξης Αποστολής
     *
     * @param \DateTime $dispatchDate
     * @return self
     */
    public function setDispatchDate(?\DateTime $dispatchDate = null)
    {
        $this->dispatchDate = $dispatchDate;
        return $this;
    }

    /**
     * Gets as dispatchTime
     *
     * Ώρα Έναρξης Αποστολής
     *
     * @return \DateTime
     */
    public function getDispatchTime()
    {
        return $this->dispatchTime;
    }

    /**
     * Sets a new dispatchTime
     *
     * Ώρα Έναρξης Αποστολής
     *
     * @param \DateTime $dispatchTime
     * @return self
     */
    public function setDispatchTime(?\DateTime $dispatchTime = null)
    {
        $this->dispatchTime = $dispatchTime;
        return $this;
    }

    /**
     * Gets as vehicleNumber
     *
     * Αριθμός Οχήματος
     *
     * @return string
     */
    public function getVehicleNumber()
    {
        return $this->vehicleNumber;
    }

    /**
     * Sets a new vehicleNumber
     *
     * Αριθμός Οχήματος
     *
     * @param string $vehicleNumber
     * @return self
     */
    public function setVehicleNumber($vehicleNumber)
    {
        $this->vehicleNumber = $vehicleNumber;
        return $this;
    }

    /**
     * Gets as movePurpose
     *
     * Σκοπός Διακίνησης
     *
     * @return int
     */
    public function getMovePurpose()
    {
        return $this->movePurpose;
    }

    /**
     * Sets a new movePurpose
     *
     * Σκοπός Διακίνησης
     *
     * @param int $movePurpose
     * @return self
     */
    public function setMovePurpose($movePurpose)
    {
        $this->movePurpose = $movePurpose;
        return $this;
    }

    /**
     * Gets as fuelInvoice
     *
     * Παραστατικό Καυσίμων
     *
     * @return bool
     */
    public function getFuelInvoice()
    {
        return $this->fuelInvoice;
    }

    /**
     * Sets a new fuelInvoice
     *
     * Παραστατικό Καυσίμων
     *
     * @param bool $fuelInvoice
     * @return self
     */
    public function setFuelInvoice($fuelInvoice)
    {
        $this->fuelInvoice = $fuelInvoice;
        return $this;
    }

    /**
     * Gets as specialInvoiceCategory
     *
     * Ειδική Κατηγορία Παραστατικού
     *
     * @return int
     */
    public function getSpecialInvoiceCategory()
    {
        return $this->specialInvoiceCategory;
    }

    /**
     * Sets a new specialInvoiceCategory
     *
     * Ειδική Κατηγορία Παραστατικού
     *
     * @param int $specialInvoiceCategory
     * @return self
     */
    public function setSpecialInvoiceCategory($specialInvoiceCategory)
    {
        $this->specialInvoiceCategory = $specialInvoiceCategory;
        return $this;
    }

    /**
     * Gets as invoiceVariationType
     *
     * Τύπος Απόκλισης Παραστατικού
     *
     * @return int
     */
    public function getInvoiceVariationType()
    {
        return $this->invoiceVariationType;
    }

    /**
     * Sets a new invoiceVariationType
     *
     * Τύπος Απόκλισης Παραστατικού
     *
     * @param int $invoiceVariationType
     * @return self
     */
    public function setInvoiceVariationType($invoiceVariationType)
    {
        $this->invoiceVariationType = $invoiceVariationType;
        return $this;
    }

    /**
     * Adds as otherCorrelatedEntities
     *
     * Λοιπές συσχετιζόμενες οντοτήτες
     *
     * @return self
     * @param \Sofar\Aade\EntityType $otherCorrelatedEntities
     */
    public function addToOtherCorrelatedEntities(\Sofar\Aade\EntityType $otherCorrelatedEntities)
    {
        $this->otherCorrelatedEntities[] = $otherCorrelatedEntities;
        return $this;
    }

    /**
     * isset otherCorrelatedEntities
     *
     * Λοιπές συσχετιζόμενες οντοτήτες
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCorrelatedEntities($index)
    {
        return isset($this->otherCorrelatedEntities[$index]);
    }

    /**
     * unset otherCorrelatedEntities
     *
     * Λοιπές συσχετιζόμενες οντοτήτες
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCorrelatedEntities($index)
    {
        unset($this->otherCorrelatedEntities[$index]);
    }

    /**
     * Gets as otherCorrelatedEntities
     *
     * Λοιπές συσχετιζόμενες οντοτήτες
     *
     * @return \Sofar\Aade\EntityType[]
     */
    public function getOtherCorrelatedEntities()
    {
        return $this->otherCorrelatedEntities;
    }

    /**
     * Sets a new otherCorrelatedEntities
     *
     * Λοιπές συσχετιζόμενες οντοτήτες
     *
     * @param \Sofar\Aade\EntityType[] $otherCorrelatedEntities
     * @return self
     */
    public function setOtherCorrelatedEntities(array $otherCorrelatedEntities = null)
    {
        $this->otherCorrelatedEntities = $otherCorrelatedEntities;
        return $this;
    }

    /**
     * Gets as otherDeliveryNoteHeader
     *
     * Λοιπά Γενικά Στοιχεία Διακίνησης
     *
     * @return \Sofar\Aade\OtherDeliveryNoteHeaderType
     */
    public function getOtherDeliveryNoteHeader()
    {
        return $this->otherDeliveryNoteHeader;
    }

    /**
     * Sets a new otherDeliveryNoteHeader
     *
     * Λοιπά Γενικά Στοιχεία Διακίνησης
     *
     * @param \Sofar\Aade\OtherDeliveryNoteHeaderType $otherDeliveryNoteHeader
     * @return self
     */
    public function setOtherDeliveryNoteHeader(?\Sofar\Aade\OtherDeliveryNoteHeaderType $otherDeliveryNoteHeader = null)
    {
        $this->otherDeliveryNoteHeader = $otherDeliveryNoteHeader;
        return $this;
    }

    /**
     * Gets as isDeliveryNote
     *
     * Ένδειξη Παραστατικού Διακίνησης
     *
     * @return bool
     */
    public function getIsDeliveryNote()
    {
        return $this->isDeliveryNote;
    }

    /**
     * Sets a new isDeliveryNote
     *
     * Ένδειξη Παραστατικού Διακίνησης
     *
     * @param bool $isDeliveryNote
     * @return self
     */
    public function setIsDeliveryNote($isDeliveryNote)
    {
        $this->isDeliveryNote = $isDeliveryNote;
        return $this;
    }

    /**
     * Gets as otherMovePurposeTitle
     *
     * Τίτλος της Λοιπής Αιτίας Διακίνησης
     *
     * @return string
     */
    public function getOtherMovePurposeTitle()
    {
        return $this->otherMovePurposeTitle;
    }

    /**
     * Sets a new otherMovePurposeTitle
     *
     * Τίτλος της Λοιπής Αιτίας Διακίνησης
     *
     * @param string $otherMovePurposeTitle
     * @return self
     */
    public function setOtherMovePurposeTitle($otherMovePurposeTitle)
    {
        $this->otherMovePurposeTitle = $otherMovePurposeTitle;
        return $this;
    }

    /**
     * Gets as thirdPartyCollection
     *
     * Ένδειξη Εισπράξης Τρίτων
     *
     * @return bool
     */
    public function getThirdPartyCollection()
    {
        return $this->thirdPartyCollection;
    }

    /**
     * Sets a new thirdPartyCollection
     *
     * Ένδειξη Εισπράξης Τρίτων
     *
     * @param bool $thirdPartyCollection
     * @return self
     */
    public function setThirdPartyCollection($thirdPartyCollection)
    {
        $this->thirdPartyCollection = $thirdPartyCollection;
        return $this;
    }

    /**
     * Adds as multipleConnectedMarks
     *
     * Πολλαπλά Συνδεόμενα MARKs
     *
     * @return self
     * @param int $multipleConnectedMarks
     */
    public function addToMultipleConnectedMarks($multipleConnectedMarks)
    {
        $this->multipleConnectedMarks[] = $multipleConnectedMarks;
        return $this;
    }

    /**
     * isset multipleConnectedMarks
     *
     * Πολλαπλά Συνδεόμενα MARKs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMultipleConnectedMarks($index)
    {
        return isset($this->multipleConnectedMarks[$index]);
    }

    /**
     * unset multipleConnectedMarks
     *
     * Πολλαπλά Συνδεόμενα MARKs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMultipleConnectedMarks($index)
    {
        unset($this->multipleConnectedMarks[$index]);
    }

    /**
     * Gets as multipleConnectedMarks
     *
     * Πολλαπλά Συνδεόμενα MARKs
     *
     * @return int[]
     */
    public function getMultipleConnectedMarks()
    {
        return $this->multipleConnectedMarks;
    }

    /**
     * Sets a new multipleConnectedMarks
     *
     * Πολλαπλά Συνδεόμενα MARKs
     *
     * @param int[] $multipleConnectedMarks
     * @return self
     */
    public function setMultipleConnectedMarks(array $multipleConnectedMarks = null)
    {
        $this->multipleConnectedMarks = $multipleConnectedMarks;
        return $this;
    }

    /**
     * Gets as tableAA
     *
     * AA ΤΡΑΠΕΖΙOY (για Δελτία Παραγγελίας Εστίασης)
     *
     * @return string
     */
    public function getTableAA()
    {
        return $this->tableAA;
    }

    /**
     * Sets a new tableAA
     *
     * AA ΤΡΑΠΕΖΙOY (για Δελτία Παραγγελίας Εστίασης)
     *
     * @param string $tableAA
     * @return self
     */
    public function setTableAA($tableAA)
    {
        $this->tableAA = $tableAA;
        return $this;
    }

    /**
     * Gets as totalCancelDeliveryOrders
     *
     * Ένδειξη συνολικής αναίρεσης Δελτίων Παραγελίας
     *
     * @return bool
     */
    public function getTotalCancelDeliveryOrders()
    {
        return $this->totalCancelDeliveryOrders;
    }

    /**
     * Sets a new totalCancelDeliveryOrders
     *
     * Ένδειξη συνολικής αναίρεσης Δελτίων Παραγελίας
     *
     * @param bool $totalCancelDeliveryOrders
     * @return self
     */
    public function setTotalCancelDeliveryOrders($totalCancelDeliveryOrders)
    {
        $this->totalCancelDeliveryOrders = $totalCancelDeliveryOrders;
        return $this;
    }
}

