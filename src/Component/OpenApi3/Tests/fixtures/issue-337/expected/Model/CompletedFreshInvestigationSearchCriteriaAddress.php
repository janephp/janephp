<?php

namespace CreditSafe\API\Model;

class CompletedFreshInvestigationSearchCriteriaAddress extends \ArrayObject
{
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
    protected $postcode;
    /**
     * 
     *
     * @var string
     */
    protected $simple;
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
    public function getPostcode() : string
    {
        return $this->postcode;
    }
    /**
     * 
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode) : self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSimple() : string
    {
        return $this->simple;
    }
    /**
     * 
     *
     * @param string $simple
     *
     * @return self
     */
    public function setSimple(string $simple) : self
    {
        $this->simple = $simple;
        return $this;
    }
}