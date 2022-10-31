<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet extends \ArrayObject
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
    protected $tangibleAssets;
    /**
     * 
     *
     * @var float
     */
    protected $intangibleAssets;
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
    protected $stock;
    /**
     * 
     *
     * @var float
     */
    protected $tradeDebtors;
    /**
     * 
     *
     * @var float
     */
    protected $otherDebtors;
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
    protected $miscCurrentAssets;
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
    protected $tradeCreditors;
    /**
     * 
     *
     * @var float
     */
    protected $bankBorrowingsCurrent;
    /**
     * 
     *
     * @var float
     */
    protected $otherShortTermFinance;
    /**
     * 
     *
     * @var float
     */
    protected $miscCurrentLiabilities;
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
    protected $otherLongTermFinance;
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
    protected $netAssets;
    /**
     * 
     *
     * @var float
     */
    protected $issuedShareCapital;
    /**
     * 
     *
     * @var float
     */
    protected $revaluationReserve;
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
    public function getTangibleAssets() : float
    {
        return $this->tangibleAssets;
    }
    /**
     * 
     *
     * @param float $tangibleAssets
     *
     * @return self
     */
    public function setTangibleAssets(float $tangibleAssets) : self
    {
        $this->initialized['tangibleAssets'] = true;
        $this->tangibleAssets = $tangibleAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getIntangibleAssets() : float
    {
        return $this->intangibleAssets;
    }
    /**
     * 
     *
     * @param float $intangibleAssets
     *
     * @return self
     */
    public function setIntangibleAssets(float $intangibleAssets) : self
    {
        $this->initialized['intangibleAssets'] = true;
        $this->intangibleAssets = $intangibleAssets;
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
    public function getStock() : float
    {
        return $this->stock;
    }
    /**
     * 
     *
     * @param float $stock
     *
     * @return self
     */
    public function setStock(float $stock) : self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTradeDebtors() : float
    {
        return $this->tradeDebtors;
    }
    /**
     * 
     *
     * @param float $tradeDebtors
     *
     * @return self
     */
    public function setTradeDebtors(float $tradeDebtors) : self
    {
        $this->initialized['tradeDebtors'] = true;
        $this->tradeDebtors = $tradeDebtors;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOtherDebtors() : float
    {
        return $this->otherDebtors;
    }
    /**
     * 
     *
     * @param float $otherDebtors
     *
     * @return self
     */
    public function setOtherDebtors(float $otherDebtors) : self
    {
        $this->initialized['otherDebtors'] = true;
        $this->otherDebtors = $otherDebtors;
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
    public function getMiscCurrentAssets() : float
    {
        return $this->miscCurrentAssets;
    }
    /**
     * 
     *
     * @param float $miscCurrentAssets
     *
     * @return self
     */
    public function setMiscCurrentAssets(float $miscCurrentAssets) : self
    {
        $this->initialized['miscCurrentAssets'] = true;
        $this->miscCurrentAssets = $miscCurrentAssets;
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
    public function getTradeCreditors() : float
    {
        return $this->tradeCreditors;
    }
    /**
     * 
     *
     * @param float $tradeCreditors
     *
     * @return self
     */
    public function setTradeCreditors(float $tradeCreditors) : self
    {
        $this->initialized['tradeCreditors'] = true;
        $this->tradeCreditors = $tradeCreditors;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBankBorrowingsCurrent() : float
    {
        return $this->bankBorrowingsCurrent;
    }
    /**
     * 
     *
     * @param float $bankBorrowingsCurrent
     *
     * @return self
     */
    public function setBankBorrowingsCurrent(float $bankBorrowingsCurrent) : self
    {
        $this->initialized['bankBorrowingsCurrent'] = true;
        $this->bankBorrowingsCurrent = $bankBorrowingsCurrent;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOtherShortTermFinance() : float
    {
        return $this->otherShortTermFinance;
    }
    /**
     * 
     *
     * @param float $otherShortTermFinance
     *
     * @return self
     */
    public function setOtherShortTermFinance(float $otherShortTermFinance) : self
    {
        $this->initialized['otherShortTermFinance'] = true;
        $this->otherShortTermFinance = $otherShortTermFinance;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMiscCurrentLiabilities() : float
    {
        return $this->miscCurrentLiabilities;
    }
    /**
     * 
     *
     * @param float $miscCurrentLiabilities
     *
     * @return self
     */
    public function setMiscCurrentLiabilities(float $miscCurrentLiabilities) : self
    {
        $this->initialized['miscCurrentLiabilities'] = true;
        $this->miscCurrentLiabilities = $miscCurrentLiabilities;
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
    public function getOtherLongTermFinance() : float
    {
        return $this->otherLongTermFinance;
    }
    /**
     * 
     *
     * @param float $otherLongTermFinance
     *
     * @return self
     */
    public function setOtherLongTermFinance(float $otherLongTermFinance) : self
    {
        $this->initialized['otherLongTermFinance'] = true;
        $this->otherLongTermFinance = $otherLongTermFinance;
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
    public function getNetAssets() : float
    {
        return $this->netAssets;
    }
    /**
     * 
     *
     * @param float $netAssets
     *
     * @return self
     */
    public function setNetAssets(float $netAssets) : self
    {
        $this->initialized['netAssets'] = true;
        $this->netAssets = $netAssets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getIssuedShareCapital() : float
    {
        return $this->issuedShareCapital;
    }
    /**
     * 
     *
     * @param float $issuedShareCapital
     *
     * @return self
     */
    public function setIssuedShareCapital(float $issuedShareCapital) : self
    {
        $this->initialized['issuedShareCapital'] = true;
        $this->issuedShareCapital = $issuedShareCapital;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRevaluationReserve() : float
    {
        return $this->revaluationReserve;
    }
    /**
     * 
     *
     * @param float $revaluationReserve
     *
     * @return self
     */
    public function setRevaluationReserve(float $revaluationReserve) : self
    {
        $this->initialized['revaluationReserve'] = true;
        $this->revaluationReserve = $revaluationReserve;
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