<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class PeopleSearchSuccessResultDirectorsItemAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $simpleValue;
    /**
     * @var string
     */
    public string $houseNo;
    /**
     * @var string
     */
    public string $city;
    /**
     * @var string
     */
    public string $postCode;
    public function definedProperties(): array
    {
        return ['simpleValue' => 'simpleValue', 'houseNo' => 'houseNo', 'city' => 'city', 'postCode' => 'postCode'];
    }
}