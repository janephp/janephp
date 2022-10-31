<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['currentCreditRating'] = true;
        $this->currentCreditRating = $currentCreditRating;
        return $this;
    }
}