<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $shareholderType;
    /**
     * 
     *
     * @var string
     */
    protected $shareType;
    /**
     * 
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @var float
     */
    protected $totalNumberOfSharesOwned;
    /**
     * 
     *
     * @var float
     */
    protected $percentSharesHeld;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShareholderType() : string
    {
        return $this->shareholderType;
    }
    /**
     * 
     *
     * @param string $shareholderType
     *
     * @return self
     */
    public function setShareholderType(string $shareholderType) : self
    {
        $this->initialized['shareholderType'] = true;
        $this->shareholderType = $shareholderType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShareType() : string
    {
        return $this->shareType;
    }
    /**
     * 
     *
     * @param string $shareType
     *
     * @return self
     */
    public function setShareType(string $shareType) : self
    {
        $this->initialized['shareType'] = true;
        $this->shareType = $shareType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalNumberOfSharesOwned() : float
    {
        return $this->totalNumberOfSharesOwned;
    }
    /**
     * 
     *
     * @param float $totalNumberOfSharesOwned
     *
     * @return self
     */
    public function setTotalNumberOfSharesOwned(float $totalNumberOfSharesOwned) : self
    {
        $this->initialized['totalNumberOfSharesOwned'] = true;
        $this->totalNumberOfSharesOwned = $totalNumberOfSharesOwned;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPercentSharesHeld() : float
    {
        return $this->percentSharesHeld;
    }
    /**
     * 
     *
     * @param float $percentSharesHeld
     *
     * @return self
     */
    public function setPercentSharesHeld(float $percentSharesHeld) : self
    {
        $this->initialized['percentSharesHeld'] = true;
        $this->percentSharesHeld = $percentSharesHeld;
        return $this;
    }
}