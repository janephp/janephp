<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformationCcjSummary extends \ArrayObject
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
        $this->initialized['exactRegistered'] = true;
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
        $this->initialized['possibleRegistered'] = true;
        $this->possibleRegistered = $possibleRegistered;
        return $this;
    }
}