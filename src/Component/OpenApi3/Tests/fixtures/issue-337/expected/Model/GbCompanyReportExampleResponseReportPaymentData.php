<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportPaymentData extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var float
     */
    protected $paymentsOnFile;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsOnTime;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsPaidLate;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsSentLegal;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsStillOwingLate;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsPaid0to30Days;
    /**
     * 
     *
     * @var float
     */
    protected $highestInvoiceValueOutstandingLate;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsPaid90DaysplusLate;
    /**
     * 
     *
     * @var float
     */
    protected $totalBalanceStillOwingLate;
    /**
     * 
     *
     * @var float
     */
    protected $dbt;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsPaid61to90Days;
    /**
     * 
     *
     * @var float
     */
    protected $totalBalanceStillOwing;
    /**
     * 
     *
     * @var float
     */
    protected $payments31to60DaysLate;
    /**
     * 
     *
     * @var float
     */
    protected $payments61to90DaysLate;
    /**
     * 
     *
     * @var float
     */
    protected $highestInvoiceValueOutstanding;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsStillOwing;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsWithinTerms;
    /**
     * 
     *
     * @var float
     */
    protected $payments0to30Dayslate;
    /**
     * 
     *
     * @var float
     */
    protected $averageInvoiceValue;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsPaid31to60Days;
    /**
     * 
     *
     * @var float
     */
    protected $paymentsPaid90Daysplus;
    /**
     * 
     *
     * @var float
     */
    protected $totalInvoiceValues;
    /**
     * 
     *
     * @var string
     */
    protected $paymentTrend;
    /**
     * 
     *
     * @var float
     */
    protected $industryDBT;
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsOnFile() : float
    {
        return $this->paymentsOnFile;
    }
    /**
     * 
     *
     * @param float $paymentsOnFile
     *
     * @return self
     */
    public function setPaymentsOnFile(float $paymentsOnFile) : self
    {
        $this->initialized['paymentsOnFile'] = true;
        $this->paymentsOnFile = $paymentsOnFile;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsOnTime() : float
    {
        return $this->paymentsOnTime;
    }
    /**
     * 
     *
     * @param float $paymentsOnTime
     *
     * @return self
     */
    public function setPaymentsOnTime(float $paymentsOnTime) : self
    {
        $this->initialized['paymentsOnTime'] = true;
        $this->paymentsOnTime = $paymentsOnTime;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsPaidLate() : float
    {
        return $this->paymentsPaidLate;
    }
    /**
     * 
     *
     * @param float $paymentsPaidLate
     *
     * @return self
     */
    public function setPaymentsPaidLate(float $paymentsPaidLate) : self
    {
        $this->initialized['paymentsPaidLate'] = true;
        $this->paymentsPaidLate = $paymentsPaidLate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsSentLegal() : float
    {
        return $this->paymentsSentLegal;
    }
    /**
     * 
     *
     * @param float $paymentsSentLegal
     *
     * @return self
     */
    public function setPaymentsSentLegal(float $paymentsSentLegal) : self
    {
        $this->initialized['paymentsSentLegal'] = true;
        $this->paymentsSentLegal = $paymentsSentLegal;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsStillOwingLate() : float
    {
        return $this->paymentsStillOwingLate;
    }
    /**
     * 
     *
     * @param float $paymentsStillOwingLate
     *
     * @return self
     */
    public function setPaymentsStillOwingLate(float $paymentsStillOwingLate) : self
    {
        $this->initialized['paymentsStillOwingLate'] = true;
        $this->paymentsStillOwingLate = $paymentsStillOwingLate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsPaid0to30Days() : float
    {
        return $this->paymentsPaid0to30Days;
    }
    /**
     * 
     *
     * @param float $paymentsPaid0to30Days
     *
     * @return self
     */
    public function setPaymentsPaid0to30Days(float $paymentsPaid0to30Days) : self
    {
        $this->initialized['paymentsPaid0to30Days'] = true;
        $this->paymentsPaid0to30Days = $paymentsPaid0to30Days;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHighestInvoiceValueOutstandingLate() : float
    {
        return $this->highestInvoiceValueOutstandingLate;
    }
    /**
     * 
     *
     * @param float $highestInvoiceValueOutstandingLate
     *
     * @return self
     */
    public function setHighestInvoiceValueOutstandingLate(float $highestInvoiceValueOutstandingLate) : self
    {
        $this->initialized['highestInvoiceValueOutstandingLate'] = true;
        $this->highestInvoiceValueOutstandingLate = $highestInvoiceValueOutstandingLate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsPaid90DaysplusLate() : float
    {
        return $this->paymentsPaid90DaysplusLate;
    }
    /**
     * 
     *
     * @param float $paymentsPaid90DaysplusLate
     *
     * @return self
     */
    public function setPaymentsPaid90DaysplusLate(float $paymentsPaid90DaysplusLate) : self
    {
        $this->initialized['paymentsPaid90DaysplusLate'] = true;
        $this->paymentsPaid90DaysplusLate = $paymentsPaid90DaysplusLate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalBalanceStillOwingLate() : float
    {
        return $this->totalBalanceStillOwingLate;
    }
    /**
     * 
     *
     * @param float $totalBalanceStillOwingLate
     *
     * @return self
     */
    public function setTotalBalanceStillOwingLate(float $totalBalanceStillOwingLate) : self
    {
        $this->initialized['totalBalanceStillOwingLate'] = true;
        $this->totalBalanceStillOwingLate = $totalBalanceStillOwingLate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDbt() : float
    {
        return $this->dbt;
    }
    /**
     * 
     *
     * @param float $dbt
     *
     * @return self
     */
    public function setDbt(float $dbt) : self
    {
        $this->initialized['dbt'] = true;
        $this->dbt = $dbt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsPaid61to90Days() : float
    {
        return $this->paymentsPaid61to90Days;
    }
    /**
     * 
     *
     * @param float $paymentsPaid61to90Days
     *
     * @return self
     */
    public function setPaymentsPaid61to90Days(float $paymentsPaid61to90Days) : self
    {
        $this->initialized['paymentsPaid61to90Days'] = true;
        $this->paymentsPaid61to90Days = $paymentsPaid61to90Days;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalBalanceStillOwing() : float
    {
        return $this->totalBalanceStillOwing;
    }
    /**
     * 
     *
     * @param float $totalBalanceStillOwing
     *
     * @return self
     */
    public function setTotalBalanceStillOwing(float $totalBalanceStillOwing) : self
    {
        $this->initialized['totalBalanceStillOwing'] = true;
        $this->totalBalanceStillOwing = $totalBalanceStillOwing;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPayments31to60DaysLate() : float
    {
        return $this->payments31to60DaysLate;
    }
    /**
     * 
     *
     * @param float $payments31to60DaysLate
     *
     * @return self
     */
    public function setPayments31to60DaysLate(float $payments31to60DaysLate) : self
    {
        $this->initialized['payments31to60DaysLate'] = true;
        $this->payments31to60DaysLate = $payments31to60DaysLate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPayments61to90DaysLate() : float
    {
        return $this->payments61to90DaysLate;
    }
    /**
     * 
     *
     * @param float $payments61to90DaysLate
     *
     * @return self
     */
    public function setPayments61to90DaysLate(float $payments61to90DaysLate) : self
    {
        $this->initialized['payments61to90DaysLate'] = true;
        $this->payments61to90DaysLate = $payments61to90DaysLate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHighestInvoiceValueOutstanding() : float
    {
        return $this->highestInvoiceValueOutstanding;
    }
    /**
     * 
     *
     * @param float $highestInvoiceValueOutstanding
     *
     * @return self
     */
    public function setHighestInvoiceValueOutstanding(float $highestInvoiceValueOutstanding) : self
    {
        $this->initialized['highestInvoiceValueOutstanding'] = true;
        $this->highestInvoiceValueOutstanding = $highestInvoiceValueOutstanding;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsStillOwing() : float
    {
        return $this->paymentsStillOwing;
    }
    /**
     * 
     *
     * @param float $paymentsStillOwing
     *
     * @return self
     */
    public function setPaymentsStillOwing(float $paymentsStillOwing) : self
    {
        $this->initialized['paymentsStillOwing'] = true;
        $this->paymentsStillOwing = $paymentsStillOwing;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsWithinTerms() : float
    {
        return $this->paymentsWithinTerms;
    }
    /**
     * 
     *
     * @param float $paymentsWithinTerms
     *
     * @return self
     */
    public function setPaymentsWithinTerms(float $paymentsWithinTerms) : self
    {
        $this->initialized['paymentsWithinTerms'] = true;
        $this->paymentsWithinTerms = $paymentsWithinTerms;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPayments0to30Dayslate() : float
    {
        return $this->payments0to30Dayslate;
    }
    /**
     * 
     *
     * @param float $payments0to30Dayslate
     *
     * @return self
     */
    public function setPayments0to30Dayslate(float $payments0to30Dayslate) : self
    {
        $this->initialized['payments0to30Dayslate'] = true;
        $this->payments0to30Dayslate = $payments0to30Dayslate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageInvoiceValue() : float
    {
        return $this->averageInvoiceValue;
    }
    /**
     * 
     *
     * @param float $averageInvoiceValue
     *
     * @return self
     */
    public function setAverageInvoiceValue(float $averageInvoiceValue) : self
    {
        $this->initialized['averageInvoiceValue'] = true;
        $this->averageInvoiceValue = $averageInvoiceValue;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsPaid31to60Days() : float
    {
        return $this->paymentsPaid31to60Days;
    }
    /**
     * 
     *
     * @param float $paymentsPaid31to60Days
     *
     * @return self
     */
    public function setPaymentsPaid31to60Days(float $paymentsPaid31to60Days) : self
    {
        $this->initialized['paymentsPaid31to60Days'] = true;
        $this->paymentsPaid31to60Days = $paymentsPaid31to60Days;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaymentsPaid90Daysplus() : float
    {
        return $this->paymentsPaid90Daysplus;
    }
    /**
     * 
     *
     * @param float $paymentsPaid90Daysplus
     *
     * @return self
     */
    public function setPaymentsPaid90Daysplus(float $paymentsPaid90Daysplus) : self
    {
        $this->initialized['paymentsPaid90Daysplus'] = true;
        $this->paymentsPaid90Daysplus = $paymentsPaid90Daysplus;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalInvoiceValues() : float
    {
        return $this->totalInvoiceValues;
    }
    /**
     * 
     *
     * @param float $totalInvoiceValues
     *
     * @return self
     */
    public function setTotalInvoiceValues(float $totalInvoiceValues) : self
    {
        $this->initialized['totalInvoiceValues'] = true;
        $this->totalInvoiceValues = $totalInvoiceValues;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentTrend() : string
    {
        return $this->paymentTrend;
    }
    /**
     * 
     *
     * @param string $paymentTrend
     *
     * @return self
     */
    public function setPaymentTrend(string $paymentTrend) : self
    {
        $this->initialized['paymentTrend'] = true;
        $this->paymentTrend = $paymentTrend;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getIndustryDBT() : float
    {
        return $this->industryDBT;
    }
    /**
     * 
     *
     * @param float $industryDBT
     *
     * @return self
     */
    public function setIndustryDBT(float $industryDBT) : self
    {
        $this->initialized['industryDBT'] = true;
        $this->industryDBT = $industryDBT;
        return $this;
    }
}