<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem implements AdditionalPropertiesInterface
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
    public string $postalCode;
    /**
     * @var string
     */
    public string $telephone;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'simpleValue' => 'simpleValue', 'postalCode' => 'postalCode', 'telephone' => 'telephone'];
    }
}