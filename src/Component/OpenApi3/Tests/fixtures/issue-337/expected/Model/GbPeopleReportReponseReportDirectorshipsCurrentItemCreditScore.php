<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore implements AdditionalPropertiesInterface
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
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating
     */
    protected $currentCreditRating;
    /**
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating
     */
    public function getCurrentCreditRating(): GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating
    {
        return $this->currentCreditRating;
    }
    /**
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating $currentCreditRating
     *
     * @return self
     */
    public function setCurrentCreditRating(GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating $currentCreditRating): self
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