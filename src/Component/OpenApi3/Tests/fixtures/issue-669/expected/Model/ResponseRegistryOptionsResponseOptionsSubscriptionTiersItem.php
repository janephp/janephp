<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseRegistryOptionsResponseOptionsSubscriptionTiersItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the subscription tier.
     *
     * @var string
     */
    public string $name;
    /**
     * The slug identifier of the subscription tier.
     *
     * @var string
     */
    public string $slug;
    /**
     * The number of repositories included in the subscription tier. `0` indicates that the subscription tier includes unlimited repositories.
     *
     * @var int
     */
    public int $includedRepositories;
    /**
     * The amount of storage included in the subscription tier in bytes.
     *
     * @var int
     */
    public int $includedStorageBytes;
    /**
     * A boolean indicating whether the subscription tier supports additional storage above what is included in the base plan at an additional cost per GiB used.
     *
     * @var bool
     */
    public bool $allowStorageOverage;
    /**
     * The amount of outbound data transfer included in the subscription tier in bytes.
     *
     * @var int
     */
    public int $includedBandwidthBytes;
    /**
     * The monthly cost of the subscription tier in cents.
     *
     * @var int
     */
    public int $monthlyPriceInCents;
    /**
     * The price paid in cents per GiB for additional storage beyond what is included in the subscription plan.
     *
     * @var int
     */
    public int $storageOveragePriceInCents;
    /**
     * A boolean indicating whether your account it eligible to use a certain subscription tier.
     *
     * @var bool
     */
    public bool $eligible;
    /**
     * If your account is not eligible to use a certain subscription tier, this will include a list of reasons that prevent you from using the tier.
     *
     * @var list<string>
     */
    public array $eligibilityReasons;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'slug' => 'slug', 'includedRepositories' => 'included_repositories', 'includedStorageBytes' => 'included_storage_bytes', 'allowStorageOverage' => 'allow_storage_overage', 'includedBandwidthBytes' => 'included_bandwidth_bytes', 'monthlyPriceInCents' => 'monthly_price_in_cents', 'storageOveragePriceInCents' => 'storage_overage_price_in_cents', 'eligible' => 'eligible', 'eligibilityReasons' => 'eligibility_reasons'];
    }
}