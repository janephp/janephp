<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet extends \ArrayObject
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
    protected $totalTangibleAssets;
    /**
     * 
     *
     * @var float
     */
    protected $totalIntangibleAssets;
    /**
     * 
     *
     * @var float
     */
    protected $totalOtherFixedAssets;
    /**
     * 
     *
     * @var float
     */
    protected $totalFixedAssets;
    /**
     * 
     *
     * @var float
     */
    protected $totalInventories;
    /**
     * 
     *
     * @var float
     */
    protected $tradeReceivables;
    /**
     * 
     *
     * @var float
     */
    protected $miscellaneousReceivables;
    /**
     * 
     *
     * @var float
     */
    protected $totalReceivables;
    /**
     * 
     *
     * @var float
     */
    protected $cash;
    /**
     * 
     *
     * @var float
     */
    protected $otherCurrentAssets;
    /**
     * 
     *
     * @var float
     */
    protected $totalCurrentAssets;
    /**
     * 
     *
     * @var float
     */
    protected $totalAssets;
    /**
     * 
     *
     * @var float
     */
    protected $tradePayables;
    /**
     * 
     *
     * @var float
     */
    protected $bankLiabilities;
    /**
     * 
     *
     * @var float
     */
    protected $otherLoansOrFinance;
    /**
     * 
     *
     * @var float
     */
    protected $miscellaneousLiabilities;
    /**
     * 
     *
     * @var float
     */
    protected $totalCurrentLiabilities;
    /**
     * 
     *
     * @var float
     */
    protected $bankLiabilitiesDueAfter1Year;
    /**
     * 
     *
     * @var float
     */
    protected $otherLoansOrFinanceDueAfter1Year;
    /**
     * 
     *
     * @var float
     */
    protected $miscellaneousLiabilitiesDueAfter1Year;
    /**
     * 
     *
     * @var float
     */
    protected $totalLongTermLiabilities;
    /**
     * 
     *
     * @var float
     */
    protected $totalLiabilities;
    /**
     * 
     *
     * @var float
     */
    protected $calledUpShareCapital;
    /**
     * 
     *
     * @var float
     */
    protected $revenueReserves;
    /**
     * 
     *
     * @var float
     */
    protected $otherReserves;
    /**
     * 
     *
     * @var float
     */
    protected $totalShareholdersEquity;
    /**
     * 
     *
     * @return float
     */
    public function getTotalTangibleAssets() : float
    {
        return $this->totalTangibleAssets;
    }
    /**
     * 
     *
     * @param float $totalTangibleAssets
     *
     * @return self
     */
    public function setTotalTangibleAssets(float $totalTangibleAssets) : self
    {
        $this->initialized['totalTangibleAssets'] = true;
        $this->totalTangibleAssets = $totalTangibleAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalIntangibleAssets() : float
    {
        return $this->totalIntangibleAssets;
    }
    /**
     * 
     *
     * @param float $totalIntangibleAssets
     *
     * @return self
     */
    public function setTotalIntangibleAssets(float $totalIntangibleAssets) : self
    {
        $this->initialized['totalIntangibleAssets'] = true;
        $this->totalIntangibleAssets = $totalIntangibleAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalOtherFixedAssets() : float
    {
        return $this->totalOtherFixedAssets;
    }
    /**
     * 
     *
     * @param float $totalOtherFixedAssets
     *
     * @return self
     */
    public function setTotalOtherFixedAssets(float $totalOtherFixedAssets) : self
    {
        $this->initialized['totalOtherFixedAssets'] = true;
        $this->totalOtherFixedAssets = $totalOtherFixedAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalFixedAssets() : float
    {
        return $this->totalFixedAssets;
    }
    /**
     * 
     *
     * @param float $totalFixedAssets
     *
     * @return self
     */
    public function setTotalFixedAssets(float $totalFixedAssets) : self
    {
        $this->initialized['totalFixedAssets'] = true;
        $this->totalFixedAssets = $totalFixedAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalInventories() : float
    {
        return $this->totalInventories;
    }
    /**
     * 
     *
     * @param float $totalInventories
     *
     * @return self
     */
    public function setTotalInventories(float $totalInventories) : self
    {
        $this->initialized['totalInventories'] = true;
        $this->totalInventories = $totalInventories;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTradeReceivables() : float
    {
        return $this->tradeReceivables;
    }
    /**
     * 
     *
     * @param float $tradeReceivables
     *
     * @return self
     */
    public function setTradeReceivables(float $tradeReceivables) : self
    {
        $this->initialized['tradeReceivables'] = true;
        $this->tradeReceivables = $tradeReceivables;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMiscellaneousReceivables() : float
    {
        return $this->miscellaneousReceivables;
    }
    /**
     * 
     *
     * @param float $miscellaneousReceivables
     *
     * @return self
     */
    public function setMiscellaneousReceivables(float $miscellaneousReceivables) : self
    {
        $this->initialized['miscellaneousReceivables'] = true;
        $this->miscellaneousReceivables = $miscellaneousReceivables;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalReceivables() : float
    {
        return $this->totalReceivables;
    }
    /**
     * 
     *
     * @param float $totalReceivables
     *
     * @return self
     */
    public function setTotalReceivables(float $totalReceivables) : self
    {
        $this->initialized['totalReceivables'] = true;
        $this->totalReceivables = $totalReceivables;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCash() : float
    {
        return $this->cash;
    }
    /**
     * 
     *
     * @param float $cash
     *
     * @return self
     */
    public function setCash(float $cash) : self
    {
        $this->initialized['cash'] = true;
        $this->cash = $cash;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOtherCurrentAssets() : float
    {
        return $this->otherCurrentAssets;
    }
    /**
     * 
     *
     * @param float $otherCurrentAssets
     *
     * @return self
     */
    public function setOtherCurrentAssets(float $otherCurrentAssets) : self
    {
        $this->initialized['otherCurrentAssets'] = true;
        $this->otherCurrentAssets = $otherCurrentAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalCurrentAssets() : float
    {
        return $this->totalCurrentAssets;
    }
    /**
     * 
     *
     * @param float $totalCurrentAssets
     *
     * @return self
     */
    public function setTotalCurrentAssets(float $totalCurrentAssets) : self
    {
        $this->initialized['totalCurrentAssets'] = true;
        $this->totalCurrentAssets = $totalCurrentAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalAssets() : float
    {
        return $this->totalAssets;
    }
    /**
     * 
     *
     * @param float $totalAssets
     *
     * @return self
     */
    public function setTotalAssets(float $totalAssets) : self
    {
        $this->initialized['totalAssets'] = true;
        $this->totalAssets = $totalAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTradePayables() : float
    {
        return $this->tradePayables;
    }
    /**
     * 
     *
     * @param float $tradePayables
     *
     * @return self
     */
    public function setTradePayables(float $tradePayables) : self
    {
        $this->initialized['tradePayables'] = true;
        $this->tradePayables = $tradePayables;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBankLiabilities() : float
    {
        return $this->bankLiabilities;
    }
    /**
     * 
     *
     * @param float $bankLiabilities
     *
     * @return self
     */
    public function setBankLiabilities(float $bankLiabilities) : self
    {
        $this->initialized['bankLiabilities'] = true;
        $this->bankLiabilities = $bankLiabilities;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOtherLoansOrFinance() : float
    {
        return $this->otherLoansOrFinance;
    }
    /**
     * 
     *
     * @param float $otherLoansOrFinance
     *
     * @return self
     */
    public function setOtherLoansOrFinance(float $otherLoansOrFinance) : self
    {
        $this->initialized['otherLoansOrFinance'] = true;
        $this->otherLoansOrFinance = $otherLoansOrFinance;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMiscellaneousLiabilities() : float
    {
        return $this->miscellaneousLiabilities;
    }
    /**
     * 
     *
     * @param float $miscellaneousLiabilities
     *
     * @return self
     */
    public function setMiscellaneousLiabilities(float $miscellaneousLiabilities) : self
    {
        $this->initialized['miscellaneousLiabilities'] = true;
        $this->miscellaneousLiabilities = $miscellaneousLiabilities;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalCurrentLiabilities() : float
    {
        return $this->totalCurrentLiabilities;
    }
    /**
     * 
     *
     * @param float $totalCurrentLiabilities
     *
     * @return self
     */
    public function setTotalCurrentLiabilities(float $totalCurrentLiabilities) : self
    {
        $this->initialized['totalCurrentLiabilities'] = true;
        $this->totalCurrentLiabilities = $totalCurrentLiabilities;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBankLiabilitiesDueAfter1Year() : float
    {
        return $this->bankLiabilitiesDueAfter1Year;
    }
    /**
     * 
     *
     * @param float $bankLiabilitiesDueAfter1Year
     *
     * @return self
     */
    public function setBankLiabilitiesDueAfter1Year(float $bankLiabilitiesDueAfter1Year) : self
    {
        $this->initialized['bankLiabilitiesDueAfter1Year'] = true;
        $this->bankLiabilitiesDueAfter1Year = $bankLiabilitiesDueAfter1Year;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOtherLoansOrFinanceDueAfter1Year() : float
    {
        return $this->otherLoansOrFinanceDueAfter1Year;
    }
    /**
     * 
     *
     * @param float $otherLoansOrFinanceDueAfter1Year
     *
     * @return self
     */
    public function setOtherLoansOrFinanceDueAfter1Year(float $otherLoansOrFinanceDueAfter1Year) : self
    {
        $this->initialized['otherLoansOrFinanceDueAfter1Year'] = true;
        $this->otherLoansOrFinanceDueAfter1Year = $otherLoansOrFinanceDueAfter1Year;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMiscellaneousLiabilitiesDueAfter1Year() : float
    {
        return $this->miscellaneousLiabilitiesDueAfter1Year;
    }
    /**
     * 
     *
     * @param float $miscellaneousLiabilitiesDueAfter1Year
     *
     * @return self
     */
    public function setMiscellaneousLiabilitiesDueAfter1Year(float $miscellaneousLiabilitiesDueAfter1Year) : self
    {
        $this->initialized['miscellaneousLiabilitiesDueAfter1Year'] = true;
        $this->miscellaneousLiabilitiesDueAfter1Year = $miscellaneousLiabilitiesDueAfter1Year;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalLongTermLiabilities() : float
    {
        return $this->totalLongTermLiabilities;
    }
    /**
     * 
     *
     * @param float $totalLongTermLiabilities
     *
     * @return self
     */
    public function setTotalLongTermLiabilities(float $totalLongTermLiabilities) : self
    {
        $this->initialized['totalLongTermLiabilities'] = true;
        $this->totalLongTermLiabilities = $totalLongTermLiabilities;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalLiabilities() : float
    {
        return $this->totalLiabilities;
    }
    /**
     * 
     *
     * @param float $totalLiabilities
     *
     * @return self
     */
    public function setTotalLiabilities(float $totalLiabilities) : self
    {
        $this->initialized['totalLiabilities'] = true;
        $this->totalLiabilities = $totalLiabilities;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCalledUpShareCapital() : float
    {
        return $this->calledUpShareCapital;
    }
    /**
     * 
     *
     * @param float $calledUpShareCapital
     *
     * @return self
     */
    public function setCalledUpShareCapital(float $calledUpShareCapital) : self
    {
        $this->initialized['calledUpShareCapital'] = true;
        $this->calledUpShareCapital = $calledUpShareCapital;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRevenueReserves() : float
    {
        return $this->revenueReserves;
    }
    /**
     * 
     *
     * @param float $revenueReserves
     *
     * @return self
     */
    public function setRevenueReserves(float $revenueReserves) : self
    {
        $this->initialized['revenueReserves'] = true;
        $this->revenueReserves = $revenueReserves;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOtherReserves() : float
    {
        return $this->otherReserves;
    }
    /**
     * 
     *
     * @param float $otherReserves
     *
     * @return self
     */
    public function setOtherReserves(float $otherReserves) : self
    {
        $this->initialized['otherReserves'] = true;
        $this->otherReserves = $otherReserves;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalShareholdersEquity() : float
    {
        return $this->totalShareholdersEquity;
    }
    /**
     * 
     *
     * @param float $totalShareholdersEquity
     *
     * @return self
     */
    public function setTotalShareholdersEquity(float $totalShareholdersEquity) : self
    {
        $this->initialized['totalShareholdersEquity'] = true;
        $this->totalShareholdersEquity = $totalShareholdersEquity;
        return $this;
    }
}