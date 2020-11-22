<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials
{
    /**
     * 
     *
     * @var string
     */
    protected $contingentLiabilities;
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
    protected $netWorth;
    /**
     * 
     *
     * @return string
     */
    public function getContingentLiabilities() : string
    {
        return $this->contingentLiabilities;
    }
    /**
     * 
     *
     * @param string $contingentLiabilities
     *
     * @return self
     */
    public function setContingentLiabilities(string $contingentLiabilities) : self
    {
        $this->contingentLiabilities = $contingentLiabilities;
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
        $this->workingCapital = $workingCapital;
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
        $this->netWorth = $netWorth;
        return $this;
    }
}