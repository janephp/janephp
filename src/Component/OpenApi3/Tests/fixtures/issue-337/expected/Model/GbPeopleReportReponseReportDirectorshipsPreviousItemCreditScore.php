<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore extends \ArrayObject
{
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating
     */
    protected $currentCreditRating;
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating
     */
    public function getCurrentCreditRating() : GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating
    {
        return $this->currentCreditRating;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating $currentCreditRating
     *
     * @return self
     */
    public function setCurrentCreditRating(GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating $currentCreditRating) : self
    {
        $this->currentCreditRating = $currentCreditRating;
        return $this;
    }
}