<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsInstanceSize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $bandwidthAllowanceGib;
    /**
     * @var string
     */
    public string $cpuType = 'UNSPECIFIED';
    /**
     * @var string
     */
    public string $cpus;
    /**
     * @var bool
     */
    public bool $deprecationIntent;
    /**
     * @var string
     */
    public string $memoryBytes;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var bool
     */
    public bool $scalable;
    /**
     * @var bool
     */
    public bool $singleInstanceOnly;
    /**
     * @var string
     */
    public string $slug;
    /**
     * @deprecated
     *
     * @var string
     */
    public string $tierDowngradeTo;
    /**
     * @var string
     */
    public string $tierSlug;
    /**
     * @deprecated
     *
     * @var string
     */
    public string $tierUpgradeTo;
    /**
     * @var string
     */
    public string $usdPerMonth;
    /**
     * @var string
     */
    public string $usdPerSecond;
    public function definedProperties(): array
    {
        return ['bandwidthAllowanceGib' => 'bandwidth_allowance_gib', 'cpuType' => 'cpu_type', 'cpus' => 'cpus', 'deprecationIntent' => 'deprecation_intent', 'memoryBytes' => 'memory_bytes', 'name' => 'name', 'scalable' => 'scalable', 'singleInstanceOnly' => 'single_instance_only', 'slug' => 'slug', 'tierDowngradeTo' => 'tier_downgrade_to', 'tierSlug' => 'tier_slug', 'tierUpgradeTo' => 'tier_upgrade_to', 'usdPerMonth' => 'usd_per_month', 'usdPerSecond' => 'usd_per_second'];
    }
}