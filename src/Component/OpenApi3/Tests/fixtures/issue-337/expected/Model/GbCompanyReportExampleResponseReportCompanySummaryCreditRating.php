<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanySummaryCreditRating implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $commonValue;
    /**
     * @var string
     */
    public string $commonDescription;
    /**
     * @var GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit
     */
    public GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit $creditLimit;
    /**
     * @var GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue
     */
    public GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue $providerValue;
    /**
     * @var string
     */
    public string $providerDescription;
    public function definedProperties(): array
    {
        return ['commonValue' => 'commonValue', 'commonDescription' => 'commonDescription', 'creditLimit' => 'creditLimit', 'providerValue' => 'providerValue', 'providerDescription' => 'providerDescription'];
    }
}