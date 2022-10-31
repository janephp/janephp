<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanySummaryCreditRating extends \ArrayObject
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
     * @var GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit
     */
    protected $creditLimit;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue
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
     * @return GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit
     */
    public function getCreditLimit() : GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit
    {
        return $this->creditLimit;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit $creditLimit) : self
    {
        $this->initialized['creditLimit'] = true;
        $this->creditLimit = $creditLimit;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue
     */
    public function getProviderValue() : GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue
    {
        return $this->providerValue;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue $providerValue
     *
     * @return self
     */
    public function setProviderValue(GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue $providerValue) : self
    {
        $this->initialized['providerValue'] = true;
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
        $this->initialized['providerDescription'] = true;
        $this->providerDescription = $providerDescription;
        return $this;
    }
}