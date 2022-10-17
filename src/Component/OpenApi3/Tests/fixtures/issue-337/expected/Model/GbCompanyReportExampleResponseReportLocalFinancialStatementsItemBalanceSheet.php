<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet extends \ArrayObject
{
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
        $this->totalShareholdersEquity = $totalShareholdersEquity;
        return $this;
    }
}