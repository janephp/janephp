<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportFinancialStatementsItem extends \ArrayObject
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
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $yearEndDate;
    /**
     * 
     *
     * @var float
     */
    protected $numberOfWeeks;
    /**
     * 
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @var bool
     */
    protected $consolidatedAccounts;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss
     */
    protected $profitAndLoss;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet
     */
    protected $balanceSheet;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials
     */
    protected $otherFinancials;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItemRatios
     */
    protected $ratios;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getYearEndDate() : string
    {
        return $this->yearEndDate;
    }
    /**
     * 
     *
     * @param string $yearEndDate
     *
     * @return self
     */
    public function setYearEndDate(string $yearEndDate) : self
    {
        $this->initialized['yearEndDate'] = true;
        $this->yearEndDate = $yearEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNumberOfWeeks() : float
    {
        return $this->numberOfWeeks;
    }
    /**
     * 
     *
     * @param float $numberOfWeeks
     *
     * @return self
     */
    public function setNumberOfWeeks(float $numberOfWeeks) : self
    {
        $this->initialized['numberOfWeeks'] = true;
        $this->numberOfWeeks = $numberOfWeeks;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getConsolidatedAccounts() : bool
    {
        return $this->consolidatedAccounts;
    }
    /**
     * 
     *
     * @param bool $consolidatedAccounts
     *
     * @return self
     */
    public function setConsolidatedAccounts(bool $consolidatedAccounts) : self
    {
        $this->initialized['consolidatedAccounts'] = true;
        $this->consolidatedAccounts = $consolidatedAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss
     */
    public function getProfitAndLoss() : GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss
    {
        return $this->profitAndLoss;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss $profitAndLoss
     *
     * @return self
     */
    public function setProfitAndLoss(GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss $profitAndLoss) : self
    {
        $this->initialized['profitAndLoss'] = true;
        $this->profitAndLoss = $profitAndLoss;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet
     */
    public function getBalanceSheet() : GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet
    {
        return $this->balanceSheet;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet $balanceSheet
     *
     * @return self
     */
    public function setBalanceSheet(GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet $balanceSheet) : self
    {
        $this->initialized['balanceSheet'] = true;
        $this->balanceSheet = $balanceSheet;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials
     */
    public function getOtherFinancials() : GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials
    {
        return $this->otherFinancials;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials $otherFinancials
     *
     * @return self
     */
    public function setOtherFinancials(GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials $otherFinancials) : self
    {
        $this->initialized['otherFinancials'] = true;
        $this->otherFinancials = $otherFinancials;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportFinancialStatementsItemRatios
     */
    public function getRatios() : GbCompanyReportExampleResponseReportFinancialStatementsItemRatios
    {
        return $this->ratios;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportFinancialStatementsItemRatios $ratios
     *
     * @return self
     */
    public function setRatios(GbCompanyReportExampleResponseReportFinancialStatementsItemRatios $ratios) : self
    {
        $this->initialized['ratios'] = true;
        $this->ratios = $ratios;
        return $this;
    }
}