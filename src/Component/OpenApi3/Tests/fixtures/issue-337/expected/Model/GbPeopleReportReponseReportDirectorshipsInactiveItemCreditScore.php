<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore extends \ArrayObject
{
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
        $this->currentCreditRating = $currentCreditRating;
        return $this;
    }
}