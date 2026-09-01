<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompanySearchSuccessResultCompaniesItemAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $simpleValue;
    /**
     * @var string
     */
    public string $street;
    /**
     * @var string
     */
    public string $city;
    /**
     * @var string
     */
    public string $postCode;
    /**
     * @var string
     */
    public string $province;
    public function definedProperties(): array
    {
        return ['simpleValue' => 'simpleValue', 'street' => 'street', 'city' => 'city', 'postCode' => 'postCode', 'province' => 'province'];
    }
}