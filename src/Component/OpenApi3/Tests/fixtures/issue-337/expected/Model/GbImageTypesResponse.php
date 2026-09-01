<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbImageTypesResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var list<GbImageTypesResponseAvailableTypesItem>
     */
    public array $availableTypes;
    public function definedProperties(): array
    {
        return ['country' => 'country', 'availableTypes' => 'availableTypes'];
    }
}