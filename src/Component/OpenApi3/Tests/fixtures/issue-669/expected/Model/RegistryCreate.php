<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RegistryCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @var string
     */
    public string $name;
    /**
     * The slug of the subscription tier to sign up for. Valid values can be retrieved using the options endpoint.
     *
     * @var string
     */
    public string $subscriptionTierSlug;
    /**
     * Slug of the region where registry data is stored. When not provided, a region will be selected.
     *
     * @var string
     */
    public string $region;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'subscriptionTierSlug' => 'subscription_tier_slug', 'region' => 'region'];
    }
}