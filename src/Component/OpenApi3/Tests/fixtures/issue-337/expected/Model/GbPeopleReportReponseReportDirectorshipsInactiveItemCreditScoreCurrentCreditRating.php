<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating implements AdditionalPropertiesInterface
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
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit
     */
    public GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit $creditLimit;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue
     */
    public GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue $providerValue;
    public function definedProperties(): array
    {
        return ['commonValue' => 'commonValue', 'commonDescription' => 'commonDescription', 'creditLimit' => 'creditLimit', 'providerValue' => 'providerValue'];
    }
}