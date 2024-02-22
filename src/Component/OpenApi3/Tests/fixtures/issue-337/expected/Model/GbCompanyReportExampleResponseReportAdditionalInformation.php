<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformation extends \ArrayObject
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
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem>
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
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem>
     */
    protected $mortgageDetails;
    /**
     * 
     *
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem>
     */
    protected $commentaries;
    /**
     * 
     *
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem>
     */
    protected $ratingHistory;
    /**
     * 
     *
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem>
     */
    protected $creditLimitHistory;
    /**
     * 
     *
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem>
     */
    protected $badDebtDetails;
    /**
     * 
     *
     * @return list<GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem>
     */
    public function getCompanyHistory() : array
    {
        return $this->companyHistory;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem> $companyHistory
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
     * @return list<GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem>
     */
    public function getMortgageDetails() : array
    {
        return $this->mortgageDetails;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem> $mortgageDetails
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
     * @return list<GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem>
     */
    public function getCommentaries() : array
    {
        return $this->commentaries;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem> $commentaries
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
     * @return list<GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem>
     */
    public function getRatingHistory() : array
    {
        return $this->ratingHistory;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem> $ratingHistory
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
     * @return list<GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem>
     */
    public function getCreditLimitHistory() : array
    {
        return $this->creditLimitHistory;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem> $creditLimitHistory
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
     * @return list<GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem>
     */
    public function getBadDebtDetails() : array
    {
        return $this->badDebtDetails;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem> $badDebtDetails
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