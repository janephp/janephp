<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class CompactPlace
{
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
        $this->countryCode = $countryCode;
        return $this;
    }
}