<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $currency;
    /**
     * @var float
     */
    public float $value;
    public function definedProperties(): array
    {
        return ['currency' => 'currency', 'value' => 'value'];
    }
}