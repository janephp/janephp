<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DetailedPlace extends \ArrayObject
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
    protected $format;
    /**
     * The identifier for this place
     *
     * @var string
     */
    protected $id;
    /**
     * The human readable name of this place.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $countryCode;
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
     * @var Geo
     */
    protected $geo;
    /**
     * 
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * The identifier for this place
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The identifier for this place
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The human readable name of this place.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The human readable name of this place.
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
    /**
     * 
     *
     * @return Geo
     */
    public function getGeo() : Geo
    {
        return $this->geo;
    }
    /**
     * 
     *
     * @param Geo $geo
     *
     * @return self
     */
    public function setGeo(Geo $geo) : self
    {
        $this->initialized['geo'] = true;
        $this->geo = $geo;
        return $this;
    }
}