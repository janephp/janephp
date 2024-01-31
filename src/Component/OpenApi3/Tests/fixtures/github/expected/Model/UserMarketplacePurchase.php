<?php

namespace Github\Model;

class UserMarketplacePurchase extends \ArrayObject
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
    protected $billingCycle;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $nextBillingDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $unitCount;
    /**
     * 
     *
     * @var bool
     */
    protected $onFreeTrial;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $freeTrialEndsOn;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var MarketplaceAccount
     */
    protected $account;
    /**
     * Marketplace Listing Plan
     *
     * @var MarketplaceListingPlan
     */
    protected $plan;
    /**
     * 
     *
     * @return string
     */
    public function getBillingCycle() : string
    {
        return $this->billingCycle;
    }
    /**
     * 
     *
     * @param string $billingCycle
     *
     * @return self
     */
    public function setBillingCycle(string $billingCycle) : self
    {
        $this->initialized['billingCycle'] = true;
        $this->billingCycle = $billingCycle;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getNextBillingDate() : ?\DateTime
    {
        return $this->nextBillingDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $nextBillingDate
     *
     * @return self
     */
    public function setNextBillingDate(?\DateTime $nextBillingDate) : self
    {
        $this->initialized['nextBillingDate'] = true;
        $this->nextBillingDate = $nextBillingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnitCount() : ?int
    {
        return $this->unitCount;
    }
    /**
     * 
     *
     * @param int|null $unitCount
     *
     * @return self
     */
    public function setUnitCount(?int $unitCount) : self
    {
        $this->initialized['unitCount'] = true;
        $this->unitCount = $unitCount;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOnFreeTrial() : bool
    {
        return $this->onFreeTrial;
    }
    /**
     * 
     *
     * @param bool $onFreeTrial
     *
     * @return self
     */
    public function setOnFreeTrial(bool $onFreeTrial) : self
    {
        $this->initialized['onFreeTrial'] = true;
        $this->onFreeTrial = $onFreeTrial;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getFreeTrialEndsOn() : ?\DateTime
    {
        return $this->freeTrialEndsOn;
    }
    /**
     * 
     *
     * @param \DateTime|null $freeTrialEndsOn
     *
     * @return self
     */
    public function setFreeTrialEndsOn(?\DateTime $freeTrialEndsOn) : self
    {
        $this->initialized['freeTrialEndsOn'] = true;
        $this->freeTrialEndsOn = $freeTrialEndsOn;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return MarketplaceAccount
     */
    public function getAccount() : MarketplaceAccount
    {
        return $this->account;
    }
    /**
     * 
     *
     * @param MarketplaceAccount $account
     *
     * @return self
     */
    public function setAccount(MarketplaceAccount $account) : self
    {
        $this->initialized['account'] = true;
        $this->account = $account;
        return $this;
    }
    /**
     * Marketplace Listing Plan
     *
     * @return MarketplaceListingPlan
     */
    public function getPlan() : MarketplaceListingPlan
    {
        return $this->plan;
    }
    /**
     * Marketplace Listing Plan
     *
     * @param MarketplaceListingPlan $plan
     *
     * @return self
     */
    public function setPlan(MarketplaceListingPlan $plan) : self
    {
        $this->initialized['plan'] = true;
        $this->plan = $plan;
        return $this;
    }
}