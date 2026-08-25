<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2RegistriesSubscriptionPostBody implements AdditionalPropertiesInterface
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
     * The slug of the subscription tier to sign up for.
     *
     * @var string
     */
    protected $tierSlug;
    /**
     * The slug of the subscription tier to sign up for.
     *
     * @return string
     */
    public function getTierSlug(): string
    {
        return $this->tierSlug;
    }
    /**
     * The slug of the subscription tier to sign up for.
     *
     * @param string $tierSlug
     *
     * @return self
     */
    public function setTierSlug(string $tierSlug): self
    {
        $this->initialized['tierSlug'] = true;
        $this->tierSlug = $tierSlug;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['tierSlug' => ['tier_slug', 'getTierSlug', 'setTierSlug']];
    }
}