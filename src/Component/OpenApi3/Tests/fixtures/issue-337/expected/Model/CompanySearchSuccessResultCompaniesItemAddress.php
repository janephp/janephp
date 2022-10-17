<?php

namespace CreditSafe\API\Model;

class CompanySearchSuccessResultCompaniesItemAddress extends \ArrayObject
{
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
        $this->province = $province;
        return $this;
    }
}