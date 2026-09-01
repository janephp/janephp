<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CreateFreshInvestigationRequestSearchCriteriaAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $simple;
    /**
     * @var string
     */
    public string $postcode;
    /**
     * @var string
     */
    public string $city;
    public function definedProperties(): array
    {
        return ['simple' => 'simple', 'postcode' => 'postcode', 'city' => 'city'];
    }
}