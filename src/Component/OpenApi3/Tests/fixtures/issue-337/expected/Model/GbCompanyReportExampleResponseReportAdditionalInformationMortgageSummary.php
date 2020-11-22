<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary
{
    /**
     * 
     *
     * @var float
     */
    protected $outstanding;
    /**
     * 
     *
     * @var float
     */
    protected $satisfied;
    /**
     * 
     *
     * @return float
     */
    public function getOutstanding() : float
    {
        return $this->outstanding;
    }
    /**
     * 
     *
     * @param float $outstanding
     *
     * @return self
     */
    public function setOutstanding(float $outstanding) : self
    {
        $this->outstanding = $outstanding;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSatisfied() : float
    {
        return $this->satisfied;
    }
    /**
     * 
     *
     * @param float $satisfied
     *
     * @return self
     */
    public function setSatisfied(float $satisfied) : self
    {
        $this->satisfied = $satisfied;
        return $this;
    }
}