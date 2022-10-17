<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformation extends \ArrayObject
{
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
        $this->badDebtDetails = $badDebtDetails;
        return $this;
    }
}