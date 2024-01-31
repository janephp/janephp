<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem extends \ArrayObject
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
    protected $date;
    /**
     * 
     *
     * @var float
     */
    protected $companyValue;
    /**
     * 
     *
     * @var string
     */
    protected $ratingDescription;
    /**
     * 
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCompanyValue() : float
    {
        return $this->companyValue;
    }
    /**
     * 
     *
     * @param float $companyValue
     *
     * @return self
     */
    public function setCompanyValue(float $companyValue) : self
    {
        $this->initialized['companyValue'] = true;
        $this->companyValue = $companyValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRatingDescription() : string
    {
        return $this->ratingDescription;
    }
    /**
     * 
     *
     * @param string $ratingDescription
     *
     * @return self
     */
    public function setRatingDescription(string $ratingDescription) : self
    {
        $this->initialized['ratingDescription'] = true;
        $this->ratingDescription = $ratingDescription;
        return $this;
    }
}