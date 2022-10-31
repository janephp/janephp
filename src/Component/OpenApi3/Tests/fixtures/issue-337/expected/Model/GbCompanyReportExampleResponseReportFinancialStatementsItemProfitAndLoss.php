<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var float
     */
    protected $revenue;
    /**
     * 
     *
     * @var float
     */
    protected $operatingCosts;
    /**
     * 
     *
     * @var float
     */
    protected $operatingProfit;
    /**
     * 
     *
     * @var float
     */
    protected $wagesAndSalaries;
    /**
     * 
     *
     * @var float
     */
    protected $pensionCosts;
    /**
     * 
     *
     * @var float
     */
    protected $depreciation;
    /**
     * 
     *
     * @var float
     */
    protected $amortisation;
    /**
     * 
     *
     * @var float
     */
    protected $financialExpenses;
    /**
     * 
     *
     * @var float
     */
    protected $profitBeforeTax;
    /**
     * 
     *
     * @var float
     */
    protected $tax;
    /**
     * 
     *
     * @var float
     */
    protected $profitAfterTax;
    /**
     * 
     *
     * @var float
     */
    protected $dividends;
    /**
     * 
     *
     * @var float
     */
    protected $minorityInterests;
    /**
     * 
     *
     * @var float
     */
    protected $otherAppropriations;
    /**
     * 
     *
     * @var float
     */
    protected $retainedProfit;
    /**
     * 
     *
     * @return float
     */
    public function getRevenue() : float
    {
        return $this->revenue;
    }
    /**
     * 
     *
     * @param float $revenue
     *
     * @return self
     */
    public function setRevenue(float $revenue) : self
    {
        $this->initialized['revenue'] = true;
        $this->revenue = $revenue;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOperatingCosts() : float
    {
        return $this->operatingCosts;
    }
    /**
     * 
     *
     * @param float $operatingCosts
     *
     * @return self
     */
    public function setOperatingCosts(float $operatingCosts) : self
    {
        $this->initialized['operatingCosts'] = true;
        $this->operatingCosts = $operatingCosts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOperatingProfit() : float
    {
        return $this->operatingProfit;
    }
    /**
     * 
     *
     * @param float $operatingProfit
     *
     * @return self
     */
    public function setOperatingProfit(float $operatingProfit) : self
    {
        $this->initialized['operatingProfit'] = true;
        $this->operatingProfit = $operatingProfit;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWagesAndSalaries() : float
    {
        return $this->wagesAndSalaries;
    }
    /**
     * 
     *
     * @param float $wagesAndSalaries
     *
     * @return self
     */
    public function setWagesAndSalaries(float $wagesAndSalaries) : self
    {
        $this->initialized['wagesAndSalaries'] = true;
        $this->wagesAndSalaries = $wagesAndSalaries;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPensionCosts() : float
    {
        return $this->pensionCosts;
    }
    /**
     * 
     *
     * @param float $pensionCosts
     *
     * @return self
     */
    public function setPensionCosts(float $pensionCosts) : self
    {
        $this->initialized['pensionCosts'] = true;
        $this->pensionCosts = $pensionCosts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDepreciation() : float
    {
        return $this->depreciation;
    }
    /**
     * 
     *
     * @param float $depreciation
     *
     * @return self
     */
    public function setDepreciation(float $depreciation) : self
    {
        $this->initialized['depreciation'] = true;
        $this->depreciation = $depreciation;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAmortisation() : float
    {
        return $this->amortisation;
    }
    /**
     * 
     *
     * @param float $amortisation
     *
     * @return self
     */
    public function setAmortisation(float $amortisation) : self
    {
        $this->initialized['amortisation'] = true;
        $this->amortisation = $amortisation;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFinancialExpenses() : float
    {
        return $this->financialExpenses;
    }
    /**
     * 
     *
     * @param float $financialExpenses
     *
     * @return self
     */
    public function setFinancialExpenses(float $financialExpenses) : self
    {
        $this->initialized['financialExpenses'] = true;
        $this->financialExpenses = $financialExpenses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getProfitBeforeTax() : float
    {
        return $this->profitBeforeTax;
    }
    /**
     * 
     *
     * @param float $profitBeforeTax
     *
     * @return self
     */
    public function setProfitBeforeTax(float $profitBeforeTax) : self
    {
        $this->initialized['profitBeforeTax'] = true;
        $this->profitBeforeTax = $profitBeforeTax;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTax() : float
    {
        return $this->tax;
    }
    /**
     * 
     *
     * @param float $tax
     *
     * @return self
     */
    public function setTax(float $tax) : self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getProfitAfterTax() : float
    {
        return $this->profitAfterTax;
    }
    /**
     * 
     *
     * @param float $profitAfterTax
     *
     * @return self
     */
    public function setProfitAfterTax(float $profitAfterTax) : self
    {
        $this->initialized['profitAfterTax'] = true;
        $this->profitAfterTax = $profitAfterTax;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDividends() : float
    {
        return $this->dividends;
    }
    /**
     * 
     *
     * @param float $dividends
     *
     * @return self
     */
    public function setDividends(float $dividends) : self
    {
        $this->initialized['dividends'] = true;
        $this->dividends = $dividends;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMinorityInterests() : float
    {
        return $this->minorityInterests;
    }
    /**
     * 
     *
     * @param float $minorityInterests
     *
     * @return self
     */
    public function setMinorityInterests(float $minorityInterests) : self
    {
        $this->initialized['minorityInterests'] = true;
        $this->minorityInterests = $minorityInterests;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOtherAppropriations() : float
    {
        return $this->otherAppropriations;
    }
    /**
     * 
     *
     * @param float $otherAppropriations
     *
     * @return self
     */
    public function setOtherAppropriations(float $otherAppropriations) : self
    {
        $this->initialized['otherAppropriations'] = true;
        $this->otherAppropriations = $otherAppropriations;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRetainedProfit() : float
    {
        return $this->retainedProfit;
    }
    /**
     * 
     *
     * @param float $retainedProfit
     *
     * @return self
     */
    public function setRetainedProfit(float $retainedProfit) : self
    {
        $this->initialized['retainedProfit'] = true;
        $this->retainedProfit = $retainedProfit;
        return $this;
    }
}