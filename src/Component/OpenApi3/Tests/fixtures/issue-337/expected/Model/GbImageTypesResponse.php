<?php

namespace CreditSafe\API\Model;

class GbImageTypesResponse extends \ArrayObject
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
    protected $country;
    /**
     * 
     *
     * @var list<GbImageTypesResponseAvailableTypesItem>
     */
    protected $availableTypes;
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
     * @return list<GbImageTypesResponseAvailableTypesItem>
     */
    public function getAvailableTypes() : array
    {
        return $this->availableTypes;
    }
    /**
     * 
     *
     * @param list<GbImageTypesResponseAvailableTypesItem> $availableTypes
     *
     * @return self
     */
    public function setAvailableTypes(array $availableTypes) : self
    {
        $this->initialized['availableTypes'] = true;
        $this->availableTypes = $availableTypes;
        return $this;
    }
}