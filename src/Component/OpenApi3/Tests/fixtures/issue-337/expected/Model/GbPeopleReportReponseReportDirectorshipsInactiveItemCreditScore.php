<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore implements AdditionalPropertiesInterface
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
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating
     */
    protected $currentCreditRating;
    /**
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating
     */
    public function getCurrentCreditRating(): GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating
    {
        return $this->currentCreditRating;
    }
    /**
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating $currentCreditRating
     *
     * @return self
     */
    public function setCurrentCreditRating(GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating $currentCreditRating): self
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