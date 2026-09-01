<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating
     */
    public GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating $currentCreditRating;
    public function definedProperties(): array
    {
        return ['currentCreditRating' => 'currentCreditRating'];
    }
}