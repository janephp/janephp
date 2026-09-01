<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating implements AdditionalPropertiesInterface
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
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimit
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimit $creditLimit;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValue
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValue $providerValue;
    public function definedProperties(): array
    {
        return ['commonValue' => 'commonValue', 'commonDescription' => 'commonDescription', 'creditLimit' => 'creditLimit', 'providerValue' => 'providerValue'];
    }
}