<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating implements AdditionalPropertiesInterface
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
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit
     */
    public GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit $creditLimit;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue
     */
    public GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue $providerValue;
    public function definedProperties(): array
    {
        return ['commonValue' => 'commonValue', 'commonDescription' => 'commonDescription', 'creditLimit' => 'creditLimit', 'providerValue' => 'providerValue'];
    }
}