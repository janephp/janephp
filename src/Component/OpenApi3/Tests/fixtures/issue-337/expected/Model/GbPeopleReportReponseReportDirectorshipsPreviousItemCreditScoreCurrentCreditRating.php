<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating extends \ArrayObject
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
     * @var string
     */
    protected $commonValue;
    /**
     * 
     *
     * @var string
     */
    protected $commonDescription;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit
     */
    protected $creditLimit;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue
     */
    protected $providerValue;
    /**
     * 
     *
     * @return string
     */
    public function getCommonValue() : string
    {
        return $this->commonValue;
    }
    /**
     * 
     *
     * @param string $commonValue
     *
     * @return self
     */
    public function setCommonValue(string $commonValue) : self
    {
        $this->initialized['commonValue'] = true;
        $this->commonValue = $commonValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommonDescription() : string
    {
        return $this->commonDescription;
    }
    /**
     * 
     *
     * @param string $commonDescription
     *
     * @return self
     */
    public function setCommonDescription(string $commonDescription) : self
    {
        $this->initialized['commonDescription'] = true;
        $this->commonDescription = $commonDescription;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit
     */
    public function getCreditLimit() : GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit
    {
        return $this->creditLimit;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit $creditLimit) : self
    {
        $this->initialized['creditLimit'] = true;
        $this->creditLimit = $creditLimit;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue
     */
    public function getProviderValue() : GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue
    {
        return $this->providerValue;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue $providerValue
     *
     * @return self
     */
    public function setProviderValue(GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue $providerValue) : self
    {
        $this->initialized['providerValue'] = true;
        $this->providerValue = $providerValue;
        return $this;
    }
}