<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2RegistriesSubscriptionPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug of the subscription tier to sign up for.
     *
     * @var string
     */
    public string $tierSlug;
    public function definedProperties(): array
    {
        return ['tierSlug' => 'tier_slug'];
    }
}