<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating
     */
    protected $currentCreditRating;
    /**
     * @return GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating
     */
    public function getCurrentCreditRating(): GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating
    {
        return $this->currentCreditRating;
    }
    /**
     * @param GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating $currentCreditRating
     *
     * @return self
     */
    public function setCurrentCreditRating(GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating $currentCreditRating): self
    {
        $this->initialized['currentCreditRating'] = true;
        $this->currentCreditRating = $currentCreditRating;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['currentCreditRating' => ['currentCreditRating', 'getCurrentCreditRating', 'setCurrentCreditRating']];
    }
}