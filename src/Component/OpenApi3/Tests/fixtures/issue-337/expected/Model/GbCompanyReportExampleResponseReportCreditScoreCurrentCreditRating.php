<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating implements AdditionalPropertiesInterface
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
     * @var GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit
     */
    public GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit $creditLimit;
    /**
     * @var GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue
     */
    public GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue $providerValue;
    /**
     * @var string
     */
    public string $providerDescription;
    public function definedProperties(): array
    {
        return ['commonValue' => 'commonValue', 'commonDescription' => 'commonDescription', 'creditLimit' => 'creditLimit', 'providerValue' => 'providerValue', 'providerDescription' => 'providerDescription'];
    }
}