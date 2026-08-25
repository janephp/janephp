<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsDimensionWithPrice implements AdditionalPropertiesInterface
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
     * Unique identifier for the dimension.
     *
     * @var int
     */
    protected $id;
    /**
     * Unique string identifier for the dimension, tied to a price.
     *
     * @var string
     */
    protected $sku;
    /**
     * Slug identifier for the dimension.
     *
     * @var string
     */
    protected $slug;
    /**
     * Display name for the dimension.
     *
     * @var string
     */
    protected $displayName;
    /**
     * Name of the feature associated with the dimension.
     *
     * @var string
     */
    protected $featureName;
    /**
     * A list of volumes associated with the dimension, each with its own price.
     *
     * @var list<AddonsDimensionVolumeWithPrice>
     */
    protected $volumes;
    /**
     * Unique identifier for the dimension.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Unique identifier for the dimension.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Unique string identifier for the dimension, tied to a price.
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * Unique string identifier for the dimension, tied to a price.
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Slug identifier for the dimension.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * Slug identifier for the dimension.
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
     * Display name for the dimension.
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
    /**
     * Display name for the dimension.
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * Name of the feature associated with the dimension.
     *
     * @return string
     */
    public function getFeatureName(): string
    {
        return $this->featureName;
    }
    /**
     * Name of the feature associated with the dimension.
     *
     * @param string $featureName
     *
     * @return self
     */
    public function setFeatureName(string $featureName): self
    {
        $this->initialized['featureName'] = true;
        $this->featureName = $featureName;
        return $this;
    }
    /**
     * A list of volumes associated with the dimension, each with its own price.
     *
     * @return list<AddonsDimensionVolumeWithPrice>
     */
    public function getVolumes(): array
    {
        return $this->volumes;
    }
    /**
     * A list of volumes associated with the dimension, each with its own price.
     *
     * @param list<AddonsDimensionVolumeWithPrice> $volumes
     *
     * @return self
     */
    public function setVolumes(array $volumes): self
    {
        $this->initialized['volumes'] = true;
        $this->volumes = $volumes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'sku' => ['sku', 'getSku', 'setSku'], 'slug' => ['slug', 'getSlug', 'setSlug'], 'displayName' => ['display_name', 'getDisplayName', 'setDisplayName'], 'featureName' => ['feature_name', 'getFeatureName', 'setFeatureName'], 'volumes' => ['volumes', 'getVolumes', 'setVolumes']];
    }
}