<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseSubscriptionResponse extends \ArrayObject
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
     * @var Subscription
     */
    protected $subscription;
    /**
     * @return Subscription
     */
    public function getSubscription(): Subscription
    {
        return $this->subscription;
    }
    /**
     * @param Subscription $subscription
     *
     * @return self
     */
    public function setSubscription(Subscription $subscription): self
    {
        $this->initialized['subscription'] = true;
        $this->subscription = $subscription;
        return $this;
    }
}