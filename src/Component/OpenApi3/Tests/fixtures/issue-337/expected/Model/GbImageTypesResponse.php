<?php

namespace CreditSafe\API\Model;

class GbImageTypesResponse extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var GbImageTypesResponseAvailableTypesItem[]
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
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return GbImageTypesResponseAvailableTypesItem[]
     */
    public function getAvailableTypes() : array
    {
        return $this->availableTypes;
    }
    /**
     * 
     *
     * @param GbImageTypesResponseAvailableTypesItem[] $availableTypes
     *
     * @return self
     */
    public function setAvailableTypes(array $availableTypes) : self
    {
        $this->availableTypes = $availableTypes;
        return $this;
    }
}