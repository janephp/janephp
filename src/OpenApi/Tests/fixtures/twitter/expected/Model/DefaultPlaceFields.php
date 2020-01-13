<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DefaultPlaceFields
{
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
        $this->containedWithin = $containedWithin;
        return $this;
    }
}