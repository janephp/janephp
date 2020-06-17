<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating
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
     * @var GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit
     */
    protected $creditLimit;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue
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
     * @return GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit
     */
    public function getCreditLimit() : GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit
    {
        return $this->creditLimit;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit $creditLimit) : self
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue
     */
    public function getProviderValue() : GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue
    {
        return $this->providerValue;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue $providerValue
     *
     * @return self
     */
    public function setProviderValue(GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue $providerValue) : self
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