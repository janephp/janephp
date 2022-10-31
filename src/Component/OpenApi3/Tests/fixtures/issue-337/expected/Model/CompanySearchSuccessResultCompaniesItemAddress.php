<?php

namespace CreditSafe\API\Model;

class CompanySearchSuccessResultCompaniesItemAddress extends \ArrayObject
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
     * @var string
     */
    protected $simpleValue;
    /**
     * 
     *
     * @var string
     */
    protected $street;
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
     * 
     *
     * @var string
     */
    protected $postCode;
    /**
     * 
     *
     * @var string
     */
    protected $province;
    /**
     * 
     *
     * @return string
     */
    public function getSimpleValue() : string
    {
        return $this->simpleValue;
    }
    /**
     * 
     *
     * @param string $simpleValue
     *
     * @return self
     */
    public function setSimpleValue(string $simpleValue) : self
    {
        $this->initialized['simpleValue'] = true;
        $this->simpleValue = $simpleValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }
    /**
     * 
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street) : self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostCode() : string
    {
        return $this->postCode;
    }
    /**
     * 
     *
     * @param string $postCode
     *
     * @return self
     */
    public function setPostCode(string $postCode) : self
    {
        $this->initialized['postCode'] = true;
        $this->postCode = $postCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProvince() : string
    {
        return $this->province;
    }
    /**
     * 
     *
     * @param string $province
     *
     * @return self
     */
    public function setProvince(string $province) : self
    {
        $this->initialized['province'] = true;
        $this->province = $province;
        return $this;
    }
}