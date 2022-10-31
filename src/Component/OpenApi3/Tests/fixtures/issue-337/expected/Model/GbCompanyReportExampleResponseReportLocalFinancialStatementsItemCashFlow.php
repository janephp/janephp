<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow extends \ArrayObject
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
    protected $netCashFlowFromOperations;
    /**
     * 
     *
     * @var float
     */
    protected $netCashFlowBeforeFinancing;
    /**
     * 
     *
     * @var float
     */
    protected $netCashFlowFromFinancing;
    /**
     * 
     *
     * @var float
     */
    protected $increaseInCash;
    /**
     * 
     *
     * @return float
     */
    public function getNetCashFlowFromOperations() : float
    {
        return $this->netCashFlowFromOperations;
    }
    /**
     * 
     *
     * @param float $netCashFlowFromOperations
     *
     * @return self
     */
    public function setNetCashFlowFromOperations(float $netCashFlowFromOperations) : self
    {
        $this->initialized['netCashFlowFromOperations'] = true;
        $this->netCashFlowFromOperations = $netCashFlowFromOperations;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNetCashFlowBeforeFinancing() : float
    {
        return $this->netCashFlowBeforeFinancing;
    }
    /**
     * 
     *
     * @param float $netCashFlowBeforeFinancing
     *
     * @return self
     */
    public function setNetCashFlowBeforeFinancing(float $netCashFlowBeforeFinancing) : self
    {
        $this->initialized['netCashFlowBeforeFinancing'] = true;
        $this->netCashFlowBeforeFinancing = $netCashFlowBeforeFinancing;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNetCashFlowFromFinancing() : float
    {
        return $this->netCashFlowFromFinancing;
    }
    /**
     * 
     *
     * @param float $netCashFlowFromFinancing
     *
     * @return self
     */
    public function setNetCashFlowFromFinancing(float $netCashFlowFromFinancing) : self
    {
        $this->initialized['netCashFlowFromFinancing'] = true;
        $this->netCashFlowFromFinancing = $netCashFlowFromFinancing;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getIncreaseInCash() : float
    {
        return $this->increaseInCash;
    }
    /**
     * 
     *
     * @param float $increaseInCash
     *
     * @return self
     */
    public function setIncreaseInCash(float $increaseInCash) : self
    {
        $this->initialized['increaseInCash'] = true;
        $this->increaseInCash = $increaseInCash;
        return $this;
    }
}