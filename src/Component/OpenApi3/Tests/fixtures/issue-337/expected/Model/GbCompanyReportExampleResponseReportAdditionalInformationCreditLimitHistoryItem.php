<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $date;
    /**
     * @var GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue
     */
    public GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue $companyValue;
    public function definedProperties(): array
    {
        return ['date' => 'date', 'companyValue' => 'companyValue'];
    }
}