<?php

namespace CreditSafe\API\Model;

class UserDetails extends \ArrayObject
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
     * The ISO/Alpha 2 format country code for the user's country.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The date that the Global Monitoring user account was created.
     *
     * @var \DateTime
     */
    protected $createdDate;
    /**
     * The unique identifier for the user's customer account, used across the Creditsafe product suite.
     *
     * @var float
     */
    protected $csCustomerId;
    /**
     * The unique identifier for the user's account, used across the Creditsafe product suite.
     *
     * @var float
     */
    protected $csUserId;
    /**
     * If auto-tracker is enabled, any companies that you pull a credit report for are automatically added to the portfolio that you have selected as default.
     *
     * @var bool
     */
    protected $isAutoTracker;
    /**
     * The language code for the user's preferred language.
     *
     * @var string
     */
    protected $languageCode;
    /**
     * The date the the user last accessed the Global Monitoring product.
     *
     * @var \DateTime
     */
    protected $lastAccessDate;
    /**
     * The date that the user's details were last modified.
     *
     * @var \DateTime
     */
    protected $modifiedDate;
    /**
     * The date that the user's contract is currently set to expire. From this date onward, the user will be unable to access to Global Monitoring product.
     *
     * @var \DateTime
     */
    protected $contractEndDate;
    /**
     * The internal identifier used to reference the user's account through the Global Monitoring product.
     *
     * @var float
     */
    protected $userId;
    /**
     * The ISO/Alpha 2 format country code for the user's country.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The ISO/Alpha 2 format country code for the user's country.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * The date that the Global Monitoring user account was created.
     *
     * @return \DateTime
     */
    public function getCreatedDate() : \DateTime
    {
        return $this->createdDate;
    }
    /**
     * The date that the Global Monitoring user account was created.
     *
     * @param \DateTime $createdDate
     *
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate) : self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * The unique identifier for the user's customer account, used across the Creditsafe product suite.
     *
     * @return float
     */
    public function getCsCustomerId() : float
    {
        return $this->csCustomerId;
    }
    /**
     * The unique identifier for the user's customer account, used across the Creditsafe product suite.
     *
     * @param float $csCustomerId
     *
     * @return self
     */
    public function setCsCustomerId(float $csCustomerId) : self
    {
        $this->initialized['csCustomerId'] = true;
        $this->csCustomerId = $csCustomerId;
        return $this;
    }
    /**
     * The unique identifier for the user's account, used across the Creditsafe product suite.
     *
     * @return float
     */
    public function getCsUserId() : float
    {
        return $this->csUserId;
    }
    /**
     * The unique identifier for the user's account, used across the Creditsafe product suite.
     *
     * @param float $csUserId
     *
     * @return self
     */
    public function setCsUserId(float $csUserId) : self
    {
        $this->initialized['csUserId'] = true;
        $this->csUserId = $csUserId;
        return $this;
    }
    /**
     * If auto-tracker is enabled, any companies that you pull a credit report for are automatically added to the portfolio that you have selected as default.
     *
     * @return bool
     */
    public function getIsAutoTracker() : bool
    {
        return $this->isAutoTracker;
    }
    /**
     * If auto-tracker is enabled, any companies that you pull a credit report for are automatically added to the portfolio that you have selected as default.
     *
     * @param bool $isAutoTracker
     *
     * @return self
     */
    public function setIsAutoTracker(bool $isAutoTracker) : self
    {
        $this->initialized['isAutoTracker'] = true;
        $this->isAutoTracker = $isAutoTracker;
        return $this;
    }
    /**
     * The language code for the user's preferred language.
     *
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }
    /**
     * The language code for the user's preferred language.
     *
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode(string $languageCode) : self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * The date the the user last accessed the Global Monitoring product.
     *
     * @return \DateTime
     */
    public function getLastAccessDate() : \DateTime
    {
        return $this->lastAccessDate;
    }
    /**
     * The date the the user last accessed the Global Monitoring product.
     *
     * @param \DateTime $lastAccessDate
     *
     * @return self
     */
    public function setLastAccessDate(\DateTime $lastAccessDate) : self
    {
        $this->initialized['lastAccessDate'] = true;
        $this->lastAccessDate = $lastAccessDate;
        return $this;
    }
    /**
     * The date that the user's details were last modified.
     *
     * @return \DateTime
     */
    public function getModifiedDate() : \DateTime
    {
        return $this->modifiedDate;
    }
    /**
     * The date that the user's details were last modified.
     *
     * @param \DateTime $modifiedDate
     *
     * @return self
     */
    public function setModifiedDate(\DateTime $modifiedDate) : self
    {
        $this->initialized['modifiedDate'] = true;
        $this->modifiedDate = $modifiedDate;
        return $this;
    }
    /**
     * The date that the user's contract is currently set to expire. From this date onward, the user will be unable to access to Global Monitoring product.
     *
     * @return \DateTime
     */
    public function getContractEndDate() : \DateTime
    {
        return $this->contractEndDate;
    }
    /**
     * The date that the user's contract is currently set to expire. From this date onward, the user will be unable to access to Global Monitoring product.
     *
     * @param \DateTime $contractEndDate
     *
     * @return self
     */
    public function setContractEndDate(\DateTime $contractEndDate) : self
    {
        $this->initialized['contractEndDate'] = true;
        $this->contractEndDate = $contractEndDate;
        return $this;
    }
    /**
     * The internal identifier used to reference the user's account through the Global Monitoring product.
     *
     * @return float
     */
    public function getUserId() : float
    {
        return $this->userId;
    }
    /**
     * The internal identifier used to reference the user's account through the Global Monitoring product.
     *
     * @param float $userId
     *
     * @return self
     */
    public function setUserId(float $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
}