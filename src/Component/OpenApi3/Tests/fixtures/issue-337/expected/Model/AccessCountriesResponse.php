<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class AccessCountriesResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $correlationId;
    /**
     * @var list<AccessCountriesResponseCountryAccessItem>
     */
    public array $countryAccess;
    public function definedProperties(): array
    {
        return ['correlationId' => 'correlationId', 'countryAccess' => 'countryAccess'];
    }
}