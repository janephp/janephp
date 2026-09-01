<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $simple;
    /**
     * @var string
     */
    public string $city;
    /**
     * @var string
     */
    public string $postcode;
    public function definedProperties(): array
    {
        return ['simple' => 'simple', 'city' => 'city', 'postcode' => 'postcode'];
    }
}