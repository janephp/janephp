<?php

namespace Github\Model;

class MarketplacePurchaseMarketplacePurchase extends \ArrayObject
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
     * @var string|null
     */
    protected $nextBillingDate;
    /**
     * 
     *
     * @var bool
     */
    protected $isInstalled;
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
     * @var string|null
     */
    protected $freeTrialEndsOn;
    /**
     * 
     *
     * @var string
     */
    protected $updatedAt;
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
     * @return string|null
     */
    public function getNextBillingDate() : ?string
    {
        return $this->nextBillingDate;
    }
    /**
     * 
     *
     * @param string|null $nextBillingDate
     *
     * @return self
     */
    public function setNextBillingDate(?string $nextBillingDate) : self
    {
        $this->initialized['nextBillingDate'] = true;
        $this->nextBillingDate = $nextBillingDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsInstalled() : bool
    {
        return $this->isInstalled;
    }
    /**
     * 
     *
     * @param bool $isInstalled
     *
     * @return self
     */
    public function setIsInstalled(bool $isInstalled) : self
    {
        $this->initialized['isInstalled'] = true;
        $this->isInstalled = $isInstalled;
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
     * @return string|null
     */
    public function getFreeTrialEndsOn() : ?string
    {
        return $this->freeTrialEndsOn;
    }
    /**
     * 
     *
     * @param string|null $freeTrialEndsOn
     *
     * @return self
     */
    public function setFreeTrialEndsOn(?string $freeTrialEndsOn) : self
    {
        $this->initialized['freeTrialEndsOn'] = true;
        $this->freeTrialEndsOn = $freeTrialEndsOn;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
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