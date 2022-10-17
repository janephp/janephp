<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss extends \ArrayObject
{
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
        $this->retainedProfit = $retainedProfit;
        return $this;
    }
}