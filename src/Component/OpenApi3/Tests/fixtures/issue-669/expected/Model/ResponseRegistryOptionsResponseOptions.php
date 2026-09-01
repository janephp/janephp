<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseRegistryOptionsResponseOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $availableRegions;
    /**
     * @var list<ResponseRegistryOptionsResponseOptionsSubscriptionTiersItem>
     */
    public array $subscriptionTiers;
    public function definedProperties(): array
    {
        return ['availableRegions' => 'available_regions', 'subscriptionTiers' => 'subscription_tiers'];
    }
}