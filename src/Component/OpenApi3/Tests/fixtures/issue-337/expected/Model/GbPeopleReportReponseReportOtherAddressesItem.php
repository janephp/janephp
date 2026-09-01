<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportOtherAddressesItem implements AdditionalPropertiesInterface
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
    /**
     * @var string
     */
    public string $province;
    /**
     * @var string
     */
    public string $country;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'simpleValue' => 'simpleValue', 'street' => 'street', 'city' => 'city', 'postalCode' => 'postalCode', 'province' => 'province', 'country' => 'country'];
    }
}