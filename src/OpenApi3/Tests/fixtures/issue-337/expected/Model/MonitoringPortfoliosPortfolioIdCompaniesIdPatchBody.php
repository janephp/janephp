<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody
{
    /**
     * 
     *
     * @var string
     */
    protected $personalReference;
    /**
     * 
     *
     * @var string
     */
    protected $freeText;
    /**
     * 
     *
     * @var string
     */
    protected $personalLimit;
    /**
     * 
     *
     * @return string
     */
    public function getPersonalReference() : string
    {
        return $this->personalReference;
    }
    /**
     * 
     *
     * @param string $personalReference
     *
     * @return self
     */
    public function setPersonalReference(string $personalReference) : self
    {
        $this->personalReference = $personalReference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFreeText() : string
    {
        return $this->freeText;
    }
    /**
     * 
     *
     * @param string $freeText
     *
     * @return self
     */
    public function setFreeText(string $freeText) : self
    {
        $this->freeText = $freeText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPersonalLimit() : string
    {
        return $this->personalLimit;
    }
    /**
     * 
     *
     * @param string $personalLimit
     *
     * @return self
     */
    public function setPersonalLimit(string $personalLimit) : self
    {
        $this->personalLimit = $personalLimit;
        return $this;
    }
}