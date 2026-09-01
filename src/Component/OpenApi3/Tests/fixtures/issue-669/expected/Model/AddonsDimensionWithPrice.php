<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsDimensionWithPrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the dimension.
     *
     * @var int
     */
    public int $id;
    /**
     * Unique string identifier for the dimension, tied to a price.
     *
     * @var string
     */
    public string $sku;
    /**
     * Slug identifier for the dimension.
     *
     * @var string
     */
    public string $slug;
    /**
     * Display name for the dimension.
     *
     * @var string
     */
    public string $displayName;
    /**
     * Name of the feature associated with the dimension.
     *
     * @var string
     */
    public string $featureName;
    /**
     * A list of volumes associated with the dimension, each with its own price.
     *
     * @var list<AddonsDimensionVolumeWithPrice>
     */
    public array $volumes;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'sku' => 'sku', 'slug' => 'slug', 'displayName' => 'display_name', 'featureName' => 'feature_name', 'volumes' => 'volumes'];
    }
}