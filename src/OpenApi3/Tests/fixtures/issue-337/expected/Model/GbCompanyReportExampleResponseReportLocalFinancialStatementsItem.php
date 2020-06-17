<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportLocalFinancialStatementsItem
{
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
     * @var string
     */
    protected $auditQualification;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss
     */
    protected $profitAndLoss;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet
     */
    protected $balanceSheet;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow
     */
    protected $cashFlow;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials
     */
    protected $otherFinancials;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios
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
        $this->consolidatedAccounts = $consolidatedAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuditQualification() : string
    {
        return $this->auditQualification;
    }
    /**
     * 
     *
     * @param string $auditQualification
     *
     * @return self
     */
    public function setAuditQualification(string $auditQualification) : self
    {
        $this->auditQualification = $auditQualification;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss
     */
    public function getProfitAndLoss() : GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss
    {
        return $this->profitAndLoss;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss $profitAndLoss
     *
     * @return self
     */
    public function setProfitAndLoss(GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss $profitAndLoss) : self
    {
        $this->profitAndLoss = $profitAndLoss;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet
     */
    public function getBalanceSheet() : GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet
    {
        return $this->balanceSheet;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet $balanceSheet
     *
     * @return self
     */
    public function setBalanceSheet(GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet $balanceSheet) : self
    {
        $this->balanceSheet = $balanceSheet;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow
     */
    public function getCashFlow() : GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow
    {
        return $this->cashFlow;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow $cashFlow
     *
     * @return self
     */
    public function setCashFlow(GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow $cashFlow) : self
    {
        $this->cashFlow = $cashFlow;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials
     */
    public function getOtherFinancials() : GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials
    {
        return $this->otherFinancials;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials $otherFinancials
     *
     * @return self
     */
    public function setOtherFinancials(GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials $otherFinancials) : self
    {
        $this->otherFinancials = $otherFinancials;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios
     */
    public function getRatios() : GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios
    {
        return $this->ratios;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios $ratios
     *
     * @return self
     */
    public function setRatios(GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios $ratios) : self
    {
        $this->ratios = $ratios;
        return $this;
    }
}