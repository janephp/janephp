<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseRegistryOptionsResponseOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<string>
     */
    protected $availableRegions;
    /**
     * @var list<ResponseRegistryOptionsResponseOptionsSubscriptionTiersItem>
     */
    protected $subscriptionTiers;
    /**
     * @return list<string>
     */
    public function getAvailableRegions(): array
    {
        return $this->availableRegions;
    }
    /**
     * @param list<string> $availableRegions
     *
     * @return self
     */
    public function setAvailableRegions(array $availableRegions): self
    {
        $this->initialized['availableRegions'] = true;
        $this->availableRegions = $availableRegions;
        return $this;
    }
    /**
     * @return list<ResponseRegistryOptionsResponseOptionsSubscriptionTiersItem>
     */
    public function getSubscriptionTiers(): array
    {
        return $this->subscriptionTiers;
    }
    /**
     * @param list<ResponseRegistryOptionsResponseOptionsSubscriptionTiersItem> $subscriptionTiers
     *
     * @return self
     */
    public function setSubscriptionTiers(array $subscriptionTiers): self
    {
        $this->initialized['subscriptionTiers'] = true;
        $this->subscriptionTiers = $subscriptionTiers;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['availableRegions' => ['available_regions', 'getAvailableRegions', 'setAvailableRegions'], 'subscriptionTiers' => ['subscription_tiers', 'getSubscriptionTiers', 'setSubscriptionTiers']];
    }
}