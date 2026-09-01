<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $simpleValue;
    /**
     * @var string
     */
    public string $postalCode;
    public function definedProperties(): array
    {
        return ['simpleValue' => 'simpleValue', 'postalCode' => 'postalCode'];
    }
}