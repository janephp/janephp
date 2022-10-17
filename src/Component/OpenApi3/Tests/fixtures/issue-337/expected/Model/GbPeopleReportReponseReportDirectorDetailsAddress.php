<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorDetailsAddress extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
    protected $postalCode;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
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
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
}