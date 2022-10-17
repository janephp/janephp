<?php

namespace CreditSafe\API\Model;

class AccessCountriesResponse extends \ArrayObject
{
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
        $this->countryAccess = $countryAccess;
        return $this;
    }
}