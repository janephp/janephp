<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CompactPlace extends \ArrayObject
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
}