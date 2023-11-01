<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating
     */
    protected $currentCreditRating;
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating
     */
    public function getCurrentCreditRating() : GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating
    {
        return $this->currentCreditRating;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating $currentCreditRating
     *
     * @return self
     */
    public function setCurrentCreditRating(GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating $currentCreditRating) : self
    {
        $this->initialized['currentCreditRating'] = true;
        $this->currentCreditRating = $currentCreditRating;
        return $this;
    }
}