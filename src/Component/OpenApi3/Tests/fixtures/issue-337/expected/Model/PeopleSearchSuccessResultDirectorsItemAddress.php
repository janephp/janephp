<?php

namespace CreditSafe\API\Model;

class PeopleSearchSuccessResultDirectorsItemAddress extends \ArrayObject
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
    protected $simpleValue;
    /**
     * 
     *
     * @var string
     */
    protected $houseNo;
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
    public function getHouseNo() : string
    {
        return $this->houseNo;
    }
    /**
     * 
     *
     * @param string $houseNo
     *
     * @return self
     */
    public function setHouseNo(string $houseNo) : self
    {
        $this->initialized['houseNo'] = true;
        $this->houseNo = $houseNo;
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
}