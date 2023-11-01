<?php

namespace CreditSafe\API\Model;

class AccessCountriesResponse extends \ArrayObject
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
    protected $correlationId;
    /**
     * 
     *
     * @var AccessCountriesResponseCountryAccessItem[]
     */
    protected $countryAccess;
    /**
     * 
     *
     * @return string
     */
    public function getCorrelationId() : string
    {
        return $this->correlationId;
    }
    /**
     * 
     *
     * @param string $correlationId
     *
     * @return self
     */
    public function setCorrelationId(string $correlationId) : self
    {
        $this->initialized['correlationId'] = true;
        $this->correlationId = $correlationId;
        return $this;
    }
    /**
     * 
     *
     * @return AccessCountriesResponseCountryAccessItem[]
     */
    public function getCountryAccess() : array
    {
        return $this->countryAccess;
    }
    /**
     * 
     *
     * @param AccessCountriesResponseCountryAccessItem[] $countryAccess
     *
     * @return self
     */
    public function setCountryAccess(array $countryAccess) : self
    {
        $this->initialized['countryAccess'] = true;
        $this->countryAccess = $countryAccess;
        return $this;
    }
}