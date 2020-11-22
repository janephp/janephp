<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating
{
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
     * @var GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit
     */
    protected $creditLimit;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue
     */
    protected $providerValue;
    /**
     * 
     *
     * @var string
     */
    protected $providerDescription;
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
        $this->commonDescription = $commonDescription;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit
     */
    public function getCreditLimit() : GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit
    {
        return $this->creditLimit;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit $creditLimit) : self
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue
     */
    public function getProviderValue() : GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue
    {
        return $this->providerValue;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue $providerValue
     *
     * @return self
     */
    public function setProviderValue(GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue $providerValue) : self
    {
        $this->providerValue = $providerValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProviderDescription() : string
    {
        return $this->providerDescription;
    }
    /**
     * 
     *
     * @param string $providerDescription
     *
     * @return self
     */
    public function setProviderDescription(string $providerDescription) : self
    {
        $this->providerDescription = $providerDescription;
        return $this;
    }
}