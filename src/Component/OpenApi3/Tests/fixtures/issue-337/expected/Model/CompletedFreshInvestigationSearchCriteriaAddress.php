<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompletedFreshInvestigationSearchCriteriaAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $city;
    /**
     * @var string
     */
    public string $postcode;
    /**
     * @var string
     */
    public string $simple;
    public function definedProperties(): array
    {
        return ['city' => 'city', 'postcode' => 'postcode', 'simple' => 'simple'];
    }
}