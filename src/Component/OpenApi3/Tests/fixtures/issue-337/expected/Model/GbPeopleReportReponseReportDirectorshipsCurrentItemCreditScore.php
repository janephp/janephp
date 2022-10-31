<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore extends \ArrayObject
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
        $this->initialized['currentCreditRating'] = true;
        $this->currentCreditRating = $currentCreditRating;
        return $this;
    }
}