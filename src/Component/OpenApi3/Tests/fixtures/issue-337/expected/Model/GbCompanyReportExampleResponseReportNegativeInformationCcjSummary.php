<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportNegativeInformationCcjSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $exactRegistered;
    /**
     * @var float
     */
    public float $possibleRegistered;
    public function definedProperties(): array
    {
        return ['exactRegistered' => 'exactRegistered', 'possibleRegistered' => 'possibleRegistered'];
    }
}