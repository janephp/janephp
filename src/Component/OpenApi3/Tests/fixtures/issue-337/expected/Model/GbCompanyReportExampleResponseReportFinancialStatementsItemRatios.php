<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportFinancialStatementsItemRatios extends \ArrayObject
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
    protected $preTaxProfitMargin;
    /**
     * 
     *
     * @var float
     */
    protected $returnOnCapitalEmployed;
    /**
     * 
     *
     * @var float
     */
    protected $returnOnTotalAssetsEmployed;
    /**
     * 
     *
     * @var float
     */
    protected $returnOnNetAssetsEmployed;
    /**
     * 
     *
     * @var float
     */
    protected $salesOrNetWorkingCapital;
    /**
     * 
     *
     * @var float
     */
    protected $stockTurnoverRatio;
    /**
     * 
     *
     * @var float
     */
    protected $debtorDays;
    /**
     * 
     *
     * @var float
     */
    protected $creditorDays;
    /**
     * 
     *
     * @var float
     */
    protected $currentRatio;
    /**
     * 
     *
     * @var float
     */
    protected $liquidityRatioOrAcidTest;
    /**
     * 
     *
     * @var float
     */
    protected $currentDebtRatio;
    /**
     * 
     *
     * @var float
     */
    protected $gearing;
    /**
     * 
     *
     * @var float
     */
    protected $equityInPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $totalDebtRatio;
    /**
     * 
     *
     * @return float
     */
    public function getPreTaxProfitMargin() : float
    {
        return $this->preTaxProfitMargin;
    }
    /**
     * 
     *
     * @param float $preTaxProfitMargin
     *
     * @return self
     */
    public function setPreTaxProfitMargin(float $preTaxProfitMargin) : self
    {
        $this->initialized['preTaxProfitMargin'] = true;
        $this->preTaxProfitMargin = $preTaxProfitMargin;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReturnOnCapitalEmployed() : float
    {
        return $this->returnOnCapitalEmployed;
    }
    /**
     * 
     *
     * @param float $returnOnCapitalEmployed
     *
     * @return self
     */
    public function setReturnOnCapitalEmployed(float $returnOnCapitalEmployed) : self
    {
        $this->initialized['returnOnCapitalEmployed'] = true;
        $this->returnOnCapitalEmployed = $returnOnCapitalEmployed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReturnOnTotalAssetsEmployed() : float
    {
        return $this->returnOnTotalAssetsEmployed;
    }
    /**
     * 
     *
     * @param float $returnOnTotalAssetsEmployed
     *
     * @return self
     */
    public function setReturnOnTotalAssetsEmployed(float $returnOnTotalAssetsEmployed) : self
    {
        $this->initialized['returnOnTotalAssetsEmployed'] = true;
        $this->returnOnTotalAssetsEmployed = $returnOnTotalAssetsEmployed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReturnOnNetAssetsEmployed() : float
    {
        return $this->returnOnNetAssetsEmployed;
    }
    /**
     * 
     *
     * @param float $returnOnNetAssetsEmployed
     *
     * @return self
     */
    public function setReturnOnNetAssetsEmployed(float $returnOnNetAssetsEmployed) : self
    {
        $this->initialized['returnOnNetAssetsEmployed'] = true;
        $this->returnOnNetAssetsEmployed = $returnOnNetAssetsEmployed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSalesOrNetWorkingCapital() : float
    {
        return $this->salesOrNetWorkingCapital;
    }
    /**
     * 
     *
     * @param float $salesOrNetWorkingCapital
     *
     * @return self
     */
    public function setSalesOrNetWorkingCapital(float $salesOrNetWorkingCapital) : self
    {
        $this->initialized['salesOrNetWorkingCapital'] = true;
        $this->salesOrNetWorkingCapital = $salesOrNetWorkingCapital;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStockTurnoverRatio() : float
    {
        return $this->stockTurnoverRatio;
    }
    /**
     * 
     *
     * @param float $stockTurnoverRatio
     *
     * @return self
     */
    public function setStockTurnoverRatio(float $stockTurnoverRatio) : self
    {
        $this->initialized['stockTurnoverRatio'] = true;
        $this->stockTurnoverRatio = $stockTurnoverRatio;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDebtorDays() : float
    {
        return $this->debtorDays;
    }
    /**
     * 
     *
     * @param float $debtorDays
     *
     * @return self
     */
    public function setDebtorDays(float $debtorDays) : self
    {
        $this->initialized['debtorDays'] = true;
        $this->debtorDays = $debtorDays;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCreditorDays() : float
    {
        return $this->creditorDays;
    }
    /**
     * 
     *
     * @param float $creditorDays
     *
     * @return self
     */
    public function setCreditorDays(float $creditorDays) : self
    {
        $this->initialized['creditorDays'] = true;
        $this->creditorDays = $creditorDays;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCurrentRatio() : float
    {
        return $this->currentRatio;
    }
    /**
     * 
     *
     * @param float $currentRatio
     *
     * @return self
     */
    public function setCurrentRatio(float $currentRatio) : self
    {
        $this->initialized['currentRatio'] = true;
        $this->currentRatio = $currentRatio;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLiquidityRatioOrAcidTest() : float
    {
        return $this->liquidityRatioOrAcidTest;
    }
    /**
     * 
     *
     * @param float $liquidityRatioOrAcidTest
     *
     * @return self
     */
    public function setLiquidityRatioOrAcidTest(float $liquidityRatioOrAcidTest) : self
    {
        $this->initialized['liquidityRatioOrAcidTest'] = true;
        $this->liquidityRatioOrAcidTest = $liquidityRatioOrAcidTest;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCurrentDebtRatio() : float
    {
        return $this->currentDebtRatio;
    }
    /**
     * 
     *
     * @param float $currentDebtRatio
     *
     * @return self
     */
    public function setCurrentDebtRatio(float $currentDebtRatio) : self
    {
        $this->initialized['currentDebtRatio'] = true;
        $this->currentDebtRatio = $currentDebtRatio;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGearing() : float
    {
        return $this->gearing;
    }
    /**
     * 
     *
     * @param float $gearing
     *
     * @return self
     */
    public function setGearing(float $gearing) : self
    {
        $this->initialized['gearing'] = true;
        $this->gearing = $gearing;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEquityInPercentage() : float
    {
        return $this->equityInPercentage;
    }
    /**
     * 
     *
     * @param float $equityInPercentage
     *
     * @return self
     */
    public function setEquityInPercentage(float $equityInPercentage) : self
    {
        $this->initialized['equityInPercentage'] = true;
        $this->equityInPercentage = $equityInPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalDebtRatio() : float
    {
        return $this->totalDebtRatio;
    }
    /**
     * 
     *
     * @param float $totalDebtRatio
     *
     * @return self
     */
    public function setTotalDebtRatio(float $totalDebtRatio) : self
    {
        $this->initialized['totalDebtRatio'] = true;
        $this->totalDebtRatio = $totalDebtRatio;
        return $this;
    }
}