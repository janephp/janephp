<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating implements AdditionalPropertiesInterface
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
     * @var GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit
     */
    public GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit $creditLimit;
    /**
     * @var GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue
     */
    public GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue $providerValue;
    /**
     * @var string
     */
    public string $providerDescription;
    public function definedProperties(): array
    {
        return ['commonValue' => 'commonValue', 'commonDescription' => 'commonDescription', 'creditLimit' => 'creditLimit', 'providerValue' => 'providerValue', 'providerDescription' => 'providerDescription'];
    }
}