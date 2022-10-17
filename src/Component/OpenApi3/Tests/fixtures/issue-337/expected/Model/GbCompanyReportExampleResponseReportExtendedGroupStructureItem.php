<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportExtendedGroupStructureItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var string
     */
    protected $safeNumber;
    /**
     * 
     *
     * @var string
     */
    protected $companyName;
    /**
     * 
     *
     * @var string
     */
    protected $registeredNumber;
    /**
     * 
     *
     * @var string
     */
    protected $latestAnnualAccounts;
    /**
     * 
     *
     * @var float
     */
    protected $level;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSafeNumber() : string
    {
        return $this->safeNumber;
    }
    /**
     * 
     *
     * @param string $safeNumber
     *
     * @return self
     */
    public function setSafeNumber(string $safeNumber) : self
    {
        $this->safeNumber = $safeNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * 
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegisteredNumber() : string
    {
        return $this->registeredNumber;
    }
    /**
     * 
     *
     * @param string $registeredNumber
     *
     * @return self
     */
    public function setRegisteredNumber(string $registeredNumber) : self
    {
        $this->registeredNumber = $registeredNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLatestAnnualAccounts() : string
    {
        return $this->latestAnnualAccounts;
    }
    /**
     * 
     *
     * @param string $latestAnnualAccounts
     *
     * @return self
     */
    public function setLatestAnnualAccounts(string $latestAnnualAccounts) : self
    {
        $this->latestAnnualAccounts = $latestAnnualAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLevel() : float
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param float $level
     *
     * @return self
     */
    public function setLevel(float $level) : self
    {
        $this->level = $level;
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
}