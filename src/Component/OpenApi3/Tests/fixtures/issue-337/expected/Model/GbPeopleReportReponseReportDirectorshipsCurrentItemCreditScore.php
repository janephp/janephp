<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating $currentCreditRating;
    public function definedProperties(): array
    {
        return ['currentCreditRating' => 'currentCreditRating'];
    }
}