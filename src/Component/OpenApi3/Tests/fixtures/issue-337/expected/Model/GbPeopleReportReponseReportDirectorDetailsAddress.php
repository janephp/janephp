<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorDetailsAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
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
    public string $postalCode;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'simpleValue' => 'simpleValue', 'street' => 'street', 'city' => 'city', 'postalCode' => 'postalCode'];
    }
}