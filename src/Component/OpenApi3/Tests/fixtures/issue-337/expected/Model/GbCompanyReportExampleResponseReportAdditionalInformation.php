<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformation extends \ArrayObject
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
     * @var GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem[]
     */
    protected $companyHistory;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary
     */
    protected $mortgageSummary;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem[]
     */
    protected $mortgageDetails;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem[]
     */
    protected $commentaries;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem[]
     */
    protected $ratingHistory;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem[]
     */
    protected $creditLimitHistory;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem[]
     */
    protected $badDebtDetails;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem[]
     */
    public function getCompanyHistory() : array
    {
        return $this->companyHistory;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem[] $companyHistory
     *
     * @return self
     */
    public function setCompanyHistory(array $companyHistory) : self
    {
        $this->initialized['companyHistory'] = true;
        $this->companyHistory = $companyHistory;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary
     */
    public function getMortgageSummary() : GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary
    {
        return $this->mortgageSummary;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary $mortgageSummary
     *
     * @return self
     */
    public function setMortgageSummary(GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary $mortgageSummary) : self
    {
        $this->initialized['mortgageSummary'] = true;
        $this->mortgageSummary = $mortgageSummary;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem[]
     */
    public function getMortgageDetails() : array
    {
        return $this->mortgageDetails;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem[] $mortgageDetails
     *
     * @return self
     */
    public function setMortgageDetails(array $mortgageDetails) : self
    {
        $this->initialized['mortgageDetails'] = true;
        $this->mortgageDetails = $mortgageDetails;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem[]
     */
    public function getCommentaries() : array
    {
        return $this->commentaries;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem[] $commentaries
     *
     * @return self
     */
    public function setCommentaries(array $commentaries) : self
    {
        $this->initialized['commentaries'] = true;
        $this->commentaries = $commentaries;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem[]
     */
    public function getRatingHistory() : array
    {
        return $this->ratingHistory;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem[] $ratingHistory
     *
     * @return self
     */
    public function setRatingHistory(array $ratingHistory) : self
    {
        $this->initialized['ratingHistory'] = true;
        $this->ratingHistory = $ratingHistory;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem[]
     */
    public function getCreditLimitHistory() : array
    {
        return $this->creditLimitHistory;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem[] $creditLimitHistory
     *
     * @return self
     */
    public function setCreditLimitHistory(array $creditLimitHistory) : self
    {
        $this->initialized['creditLimitHistory'] = true;
        $this->creditLimitHistory = $creditLimitHistory;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem[]
     */
    public function getBadDebtDetails() : array
    {
        return $this->badDebtDetails;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem[] $badDebtDetails
     *
     * @return self
     */
    public function setBadDebtDetails(array $badDebtDetails) : self
    {
        $this->initialized['badDebtDetails'] = true;
        $this->badDebtDetails = $badDebtDetails;
        return $this;
    }
}