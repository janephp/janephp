<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials extends \ArrayObject
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
     * @var bool
     */
    protected $contingentLiabilities;
    /**
     * 
     *
     * @var float
     */
    protected $bankOverdraftAndLTL;
    /**
     * 
     *
     * @var float
     */
    protected $workingCapital;
    /**
     * 
     *
     * @var float
     */
    protected $capitalEmployed;
    /**
     * 
     *
     * @var float
     */
    protected $netWorth;
    /**
     * 
     *
     * @return bool
     */
    public function getContingentLiabilities() : bool
    {
        return $this->contingentLiabilities;
    }
    /**
     * 
     *
     * @param bool $contingentLiabilities
     *
     * @return self
     */
    public function setContingentLiabilities(bool $contingentLiabilities) : self
    {
        $this->initialized['contingentLiabilities'] = true;
        $this->contingentLiabilities = $contingentLiabilities;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBankOverdraftAndLTL() : float
    {
        return $this->bankOverdraftAndLTL;
    }
    /**
     * 
     *
     * @param float $bankOverdraftAndLTL
     *
     * @return self
     */
    public function setBankOverdraftAndLTL(float $bankOverdraftAndLTL) : self
    {
        $this->initialized['bankOverdraftAndLTL'] = true;
        $this->bankOverdraftAndLTL = $bankOverdraftAndLTL;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWorkingCapital() : float
    {
        return $this->workingCapital;
    }
    /**
     * 
     *
     * @param float $workingCapital
     *
     * @return self
     */
    public function setWorkingCapital(float $workingCapital) : self
    {
        $this->initialized['workingCapital'] = true;
        $this->workingCapital = $workingCapital;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCapitalEmployed() : float
    {
        return $this->capitalEmployed;
    }
    /**
     * 
     *
     * @param float $capitalEmployed
     *
     * @return self
     */
    public function setCapitalEmployed(float $capitalEmployed) : self
    {
        $this->initialized['capitalEmployed'] = true;
        $this->capitalEmployed = $capitalEmployed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNetWorth() : float
    {
        return $this->netWorth;
    }
    /**
     * 
     *
     * @param float $netWorth
     *
     * @return self
     */
    public function setNetWorth(float $netWorth) : self
    {
        $this->initialized['netWorth'] = true;
        $this->netWorth = $netWorth;
        return $this;
    }
}