<?php

namespace CreditSafe\API\Model;

class PeopleSearchSuccessResultDirectorsItemAddress
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
}