<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $maxValue;
    /**
     * @var string
     */
    public string $minValue;
    /**
     * @var string
     */
    public string $value;
    public function definedProperties(): array
    {
        return ['maxValue' => 'maxValue', 'minValue' => 'minValue', 'value' => 'value'];
    }
}