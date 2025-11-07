<?php

namespace Jane\Generated\DigitalOcean\Model;

class SubscriptionTierBase extends \ArrayObject
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
     * The name of the subscription tier.
     *
     * @var string
     */
    protected $name;
    /**
     * The slug identifier of the subscription tier.
     *
     * @var string
     */
    protected $slug;
    /**
     * The number of repositories included in the subscription tier. `0` indicates that the subscription tier includes unlimited repositories.
     *
     * @var int
     */
    protected $includedRepositories;
    /**
     * The amount of storage included in the subscription tier in bytes.
     *
     * @var int
     */
    protected $includedStorageBytes;
    /**
     * A boolean indicating whether the subscription tier supports additional storage above what is included in the base plan at an additional cost per GiB used.
     *
     * @var bool
     */
    protected $allowStorageOverage;
    /**
     * The amount of outbound data transfer included in the subscription tier in bytes.
     *
     * @var int
     */
    protected $includedBandwidthBytes;
    /**
     * The monthly cost of the subscription tier in cents.
     *
     * @var int
     */
    protected $monthlyPriceInCents;
    /**
     * The price paid in cents per GiB for additional storage beyond what is included in the subscription plan.
     *
     * @var int
     */
    protected $storageOveragePriceInCents;
    /**
     * The name of the subscription tier.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the subscription tier.
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
     * The slug identifier of the subscription tier.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * The slug identifier of the subscription tier.
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * The number of repositories included in the subscription tier. `0` indicates that the subscription tier includes unlimited repositories.
     *
     * @return int
     */
    public function getIncludedRepositories(): int
    {
        return $this->includedRepositories;
    }
    /**
     * The number of repositories included in the subscription tier. `0` indicates that the subscription tier includes unlimited repositories.
     *
     * @param int $includedRepositories
     *
     * @return self
     */
    public function setIncludedRepositories(int $includedRepositories): self
    {
        $this->initialized['includedRepositories'] = true;
        $this->includedRepositories = $includedRepositories;
        return $this;
    }
    /**
     * The amount of storage included in the subscription tier in bytes.
     *
     * @return int
     */
    public function getIncludedStorageBytes(): int
    {
        return $this->includedStorageBytes;
    }
    /**
     * The amount of storage included in the subscription tier in bytes.
     *
     * @param int $includedStorageBytes
     *
     * @return self
     */
    public function setIncludedStorageBytes(int $includedStorageBytes): self
    {
        $this->initialized['includedStorageBytes'] = true;
        $this->includedStorageBytes = $includedStorageBytes;
        return $this;
    }
    /**
     * A boolean indicating whether the subscription tier supports additional storage above what is included in the base plan at an additional cost per GiB used.
     *
     * @return bool
     */
    public function getAllowStorageOverage(): bool
    {
        return $this->allowStorageOverage;
    }
    /**
     * A boolean indicating whether the subscription tier supports additional storage above what is included in the base plan at an additional cost per GiB used.
     *
     * @param bool $allowStorageOverage
     *
     * @return self
     */
    public function setAllowStorageOverage(bool $allowStorageOverage): self
    {
        $this->initialized['allowStorageOverage'] = true;
        $this->allowStorageOverage = $allowStorageOverage;
        return $this;
    }
    /**
     * The amount of outbound data transfer included in the subscription tier in bytes.
     *
     * @return int
     */
    public function getIncludedBandwidthBytes(): int
    {
        return $this->includedBandwidthBytes;
    }
    /**
     * The amount of outbound data transfer included in the subscription tier in bytes.
     *
     * @param int $includedBandwidthBytes
     *
     * @return self
     */
    public function setIncludedBandwidthBytes(int $includedBandwidthBytes): self
    {
        $this->initialized['includedBandwidthBytes'] = true;
        $this->includedBandwidthBytes = $includedBandwidthBytes;
        return $this;
    }
    /**
     * The monthly cost of the subscription tier in cents.
     *
     * @return int
     */
    public function getMonthlyPriceInCents(): int
    {
        return $this->monthlyPriceInCents;
    }
    /**
     * The monthly cost of the subscription tier in cents.
     *
     * @param int $monthlyPriceInCents
     *
     * @return self
     */
    public function setMonthlyPriceInCents(int $monthlyPriceInCents): self
    {
        $this->initialized['monthlyPriceInCents'] = true;
        $this->monthlyPriceInCents = $monthlyPriceInCents;
        return $this;
    }
    /**
     * The price paid in cents per GiB for additional storage beyond what is included in the subscription plan.
     *
     * @return int
     */
    public function getStorageOveragePriceInCents(): int
    {
        return $this->storageOveragePriceInCents;
    }
    /**
     * The price paid in cents per GiB for additional storage beyond what is included in the subscription plan.
     *
     * @param int $storageOveragePriceInCents
     *
     * @return self
     */
    public function setStorageOveragePriceInCents(int $storageOveragePriceInCents): self
    {
        $this->initialized['storageOveragePriceInCents'] = true;
        $this->storageOveragePriceInCents = $storageOveragePriceInCents;
        return $this;
    }
}