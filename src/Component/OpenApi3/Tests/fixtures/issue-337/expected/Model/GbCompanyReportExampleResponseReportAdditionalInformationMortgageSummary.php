<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary extends \ArrayObject
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
        $this->initialized['outstanding'] = true;
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
        $this->initialized['satisfied'] = true;
        $this->satisfied = $satisfied;
        return $this;
    }
}