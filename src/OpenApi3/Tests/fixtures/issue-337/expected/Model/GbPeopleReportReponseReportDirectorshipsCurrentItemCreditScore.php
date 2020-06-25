<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore
{
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating
     */
    protected $currentCreditRating;
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating
     */
    public function getCurrentCreditRating() : GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating
    {
        return $this->currentCreditRating;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating $currentCreditRating
     *
     * @return self
     */
    public function setCurrentCreditRating(GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating $currentCreditRating) : self
    {
        $this->currentCreditRating = $currentCreditRating;
        return $this;
    }
}