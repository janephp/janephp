<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating
     */
    public GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating $currentCreditRating;
    public function definedProperties(): array
    {
        return ['currentCreditRating' => 'currentCreditRating'];
    }
}