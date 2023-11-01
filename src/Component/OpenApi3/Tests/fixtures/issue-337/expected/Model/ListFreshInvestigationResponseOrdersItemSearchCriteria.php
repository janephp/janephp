<?php

namespace CreditSafe\API\Model;

class ListFreshInvestigationResponseOrdersItemSearchCriteria extends \ArrayObject
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
     * @var string
     */
    protected $name;
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
    protected $regNo;
    /**
     * 
     *
     * @var string
     */
    protected $additionalInfo;
    /**
     * 
     *
     * @var ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress
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
        $this->initialized['name'] = true;
        $this->name = $name;
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
        $this->initialized['vatNo'] = true;
        $this->vatNo = $vatNo;
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
        $this->initialized['regNo'] = true;
        $this->regNo = $regNo;
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
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * 
     *
     * @return ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress
     */
    public function getAddress() : ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress $address
     *
     * @return self
     */
    public function setAddress(ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress $address) : self
    {
        $this->initialized['address'] = true;
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
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}