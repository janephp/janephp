<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DefaultPlaceFields extends \ArrayObject
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
    protected $placeType;
    /**
     * 
     *
     * @var string
     */
    protected $fullName;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var string[]
     */
    protected $containedWithin;
    /**
     * 
     *
     * @return string
     */
    public function getPlaceType() : string
    {
        return $this->placeType;
    }
    /**
     * 
     *
     * @param string $placeType
     *
     * @return self
     */
    public function setPlaceType(string $placeType) : self
    {
        $this->initialized['placeType'] = true;
        $this->placeType = $placeType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName) : self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;
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
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getContainedWithin() : array
    {
        return $this->containedWithin;
    }
    /**
     * 
     *
     * @param string[] $containedWithin
     *
     * @return self
     */
    public function setContainedWithin(array $containedWithin) : self
    {
        $this->initialized['containedWithin'] = true;
        $this->containedWithin = $containedWithin;
        return $this;
    }
}