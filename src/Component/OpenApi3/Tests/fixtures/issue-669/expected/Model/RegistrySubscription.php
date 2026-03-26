<?php

namespace Jane\Generated\DigitalOcean\Model;

class RegistrySubscription extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var SubscriptionTierBase
     */
    protected $tier;
    /**
     * The time at which the subscription was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The time at which the subscription was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @return SubscriptionTierBase
     */
    public function getTier(): SubscriptionTierBase
    {
        return $this->tier;
    }
    /**
     * @param SubscriptionTierBase $tier
     *
     * @return self
     */
    public function setTier(SubscriptionTierBase $tier): self
    {
        $this->initialized['tier'] = true;
        $this->tier = $tier;
        return $this;
    }
    /**
     * The time at which the subscription was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The time at which the subscription was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The time at which the subscription was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The time at which the subscription was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}