<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $mortgageType;
    /**
     * 
     *
     * @var string
     */
    protected $dateChargeCreated;
    /**
     * 
     *
     * @var string
     */
    protected $dateChargeRegistered;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $personsEntitled;
    /**
     * 
     *
     * @var string
     */
    protected $amountSecured;
    /**
     * 
     *
     * @var string
     */
    protected $details;
    /**
     * 
     *
     * @return string
     */
    public function getMortgageType() : string
    {
        return $this->mortgageType;
    }
    /**
     * 
     *
     * @param string $mortgageType
     *
     * @return self
     */
    public function setMortgageType(string $mortgageType) : self
    {
        $this->mortgageType = $mortgageType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateChargeCreated() : string
    {
        return $this->dateChargeCreated;
    }
    /**
     * 
     *
     * @param string $dateChargeCreated
     *
     * @return self
     */
    public function setDateChargeCreated(string $dateChargeCreated) : self
    {
        $this->dateChargeCreated = $dateChargeCreated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateChargeRegistered() : string
    {
        return $this->dateChargeRegistered;
    }
    /**
     * 
     *
     * @param string $dateChargeRegistered
     *
     * @return self
     */
    public function setDateChargeRegistered(string $dateChargeRegistered) : self
    {
        $this->dateChargeRegistered = $dateChargeRegistered;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPersonsEntitled() : string
    {
        return $this->personsEntitled;
    }
    /**
     * 
     *
     * @param string $personsEntitled
     *
     * @return self
     */
    public function setPersonsEntitled(string $personsEntitled) : self
    {
        $this->personsEntitled = $personsEntitled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmountSecured() : string
    {
        return $this->amountSecured;
    }
    /**
     * 
     *
     * @param string $amountSecured
     *
     * @return self
     */
    public function setAmountSecured(string $amountSecured) : self
    {
        $this->amountSecured = $amountSecured;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDetails() : string
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param string $details
     *
     * @return self
     */
    public function setDetails(string $details) : self
    {
        $this->details = $details;
        return $this;
    }
}