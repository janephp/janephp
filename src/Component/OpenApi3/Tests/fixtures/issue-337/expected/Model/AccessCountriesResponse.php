<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class AccessCountriesResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $correlationId;
    /**
     * @var list<AccessCountriesResponseCountryAccessItem>
     */
    protected $countryAccess;
    /**
     * @return string
     */
    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }
    /**
     * @param string $correlationId
     *
     * @return self
     */
    public function setCorrelationId(string $correlationId): self
    {
        $this->initialized['correlationId'] = true;
        $this->correlationId = $correlationId;
        return $this;
    }
    /**
     * @return list<AccessCountriesResponseCountryAccessItem>
     */
    public function getCountryAccess(): array
    {
        return $this->countryAccess;
    }
    /**
     * @param list<AccessCountriesResponseCountryAccessItem> $countryAccess
     *
     * @return self
     */
    public function setCountryAccess(array $countryAccess): self
    {
        $this->initialized['countryAccess'] = true;
        $this->countryAccess = $countryAccess;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['correlationId' => ['correlationId', 'getCorrelationId', 'setCorrelationId'], 'countryAccess' => ['countryAccess', 'getCountryAccess', 'setCountryAccess']];
    }
}