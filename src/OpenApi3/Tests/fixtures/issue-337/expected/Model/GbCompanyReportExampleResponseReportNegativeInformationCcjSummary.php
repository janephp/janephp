<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformationCcjSummary
{
    /**
     * 
     *
     * @var float
     */
    protected $exactRegistered;
    /**
     * 
     *
     * @var float
     */
    protected $possibleRegistered;
    /**
     * 
     *
     * @return float
     */
    public function getExactRegistered() : float
    {
        return $this->exactRegistered;
    }
    /**
     * 
     *
     * @param float $exactRegistered
     *
     * @return self
     */
    public function setExactRegistered(float $exactRegistered) : self
    {
        $this->exactRegistered = $exactRegistered;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPossibleRegistered() : float
    {
        return $this->possibleRegistered;
    }
    /**
     * 
     *
     * @param float $possibleRegistered
     *
     * @return self
     */
    public function setPossibleRegistered(float $possibleRegistered) : self
    {
        $this->possibleRegistered = $possibleRegistered;
        return $this;
    }
}