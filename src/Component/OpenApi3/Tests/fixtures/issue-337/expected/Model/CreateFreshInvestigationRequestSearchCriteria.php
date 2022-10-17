<?php

namespace CreditSafe\API\Model;

class CreateFreshInvestigationRequestSearchCriteria extends \ArrayObject
{
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
    protected $additionalInfo;
    /**
     * 
     *
     * @var string
     */
    protected $telephoneNumber;
    /**
     * 
     *
     * @var CreateFreshInvestigationRequestSearchCriteriaAddress
     */
    protected $address;
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
     * @var string
     */
    protected $countryCode;
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
     * @return string
     */
    public function getTelephoneNumber() : string
    {
        return $this->telephoneNumber;
    }
    /**
     * 
     *
     * @param string $telephoneNumber
     *
     * @return self
     */
    public function setTelephoneNumber(string $telephoneNumber) : self
    {
        $this->telephoneNumber = $telephoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return CreateFreshInvestigationRequestSearchCriteriaAddress
     */
    public function getAddress() : CreateFreshInvestigationRequestSearchCriteriaAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param CreateFreshInvestigationRequestSearchCriteriaAddress $address
     *
     * @return self
     */
    public function setAddress(CreateFreshInvestigationRequestSearchCriteriaAddress $address) : self
    {
        $this->address = $address;
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
}