<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LoadBalancerRegion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The display name of the region.  This will be a full name that is used in the control panel and other interfaces.
     *
     * @var string
     */
    public string $name;
    /**
     * A human-readable string that is used as a unique identifier for each region.
     *
     * @var string
     */
    public string $slug;
    /**
     * This attribute is set to an array which contains features available in this region
     *
     * @var list<string>
     */
    public array $features;
    /**
     * This is a boolean value that represents whether new Droplets can be created in this region.
     *
     * @var bool
     */
    public bool $available;
    /**
     * This attribute is set to an array which contains the identifying slugs for the sizes available in this region. sizes:read is required to view.
     *
     * @var list<string>
     */
    public array $sizes;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'slug' => 'slug', 'features' => 'features', 'available' => 'available', 'sizes' => 'sizes'];
    }
}