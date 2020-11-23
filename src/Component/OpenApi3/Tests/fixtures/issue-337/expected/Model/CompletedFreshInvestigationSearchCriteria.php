<?php

namespace CreditSafe\API\Model;

class CompletedFreshInvestigationSearchCriteria
{
    /**
     * 
     *
     * @var string
     */
    protected $additionalInfo;
    /**
     * 
     *
     * @var CompletedFreshInvestigationSearchCriteriaAddress
     */
    protected $address;
    /**
     * 
     *
     * @var string
     */
    protected $countryCode;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $regNo;
    /**
     * 
     *
     * @var string
     */
    protected $vatNo;
    /**
     * 
     *
     * @return string
     */
    public function getAdditionalInfo() : string
    {
        return $this->additionalInfo;
    }
    /**
     * 
     *
     * @param string $additionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo(string $additionalInfo) : self
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * 
     *
     * @return CompletedFreshInvestigationSearchCriteriaAddress
     */
    public function getAddress() : CompletedFreshInvestigationSearchCriteriaAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param CompletedFreshInvestigationSearchCriteriaAddress $address
     *
     * @return self
     */
    public function setAddress(CompletedFreshInvestigationSearchCriteriaAddress $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegNo() : string
    {
        return $this->regNo;
    }
    /**
     * 
     *
     * @param string $regNo
     *
     * @return self
     */
    public function setRegNo(string $regNo) : self
    {
        $this->regNo = $regNo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVatNo() : string
    {
        return $this->vatNo;
    }
    /**
     * 
     *
     * @param string $vatNo
     *
     * @return self
     */
    public function setVatNo(string $vatNo) : self
    {
        $this->vatNo = $vatNo;
        return $this;
    }
}