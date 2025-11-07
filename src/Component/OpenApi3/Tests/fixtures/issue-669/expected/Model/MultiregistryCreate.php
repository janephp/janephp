<?php

namespace Jane\Generated\DigitalOcean\Model;

class MultiregistryCreate extends \ArrayObject
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
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @var string
     */
    protected $name;
    /**
     * The slug of the subscription tier to sign up for. Valid values can be retrieved using the options endpoint.
     *
     * @var string
     */
    protected $subscriptionTierSlug;
    /**
     * Slug of the region where registry data is stored. When not provided, a region will be selected.
     *
     * @var string
     */
    protected $region;
    /**
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The slug of the subscription tier to sign up for. Valid values can be retrieved using the options endpoint.
     *
     * @return string
     */
    public function getSubscriptionTierSlug(): string
    {
        return $this->subscriptionTierSlug;
    }
    /**
     * The slug of the subscription tier to sign up for. Valid values can be retrieved using the options endpoint.
     *
     * @param string $subscriptionTierSlug
     *
     * @return self
     */
    public function setSubscriptionTierSlug(string $subscriptionTierSlug): self
    {
        $this->initialized['subscriptionTierSlug'] = true;
        $this->subscriptionTierSlug = $subscriptionTierSlug;
        return $this;
    }
    /**
     * Slug of the region where registry data is stored. When not provided, a region will be selected.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Slug of the region where registry data is stored. When not provided, a region will be selected.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
}