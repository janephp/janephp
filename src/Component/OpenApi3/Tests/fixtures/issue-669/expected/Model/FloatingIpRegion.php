<?php

namespace Jane\Generated\DigitalOcean\Model;

class FloatingIpRegion extends \ArrayObject
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
     * The display name of the region.  This will be a full name that is used in the control panel and other interfaces.
     *
     * @var string
     */
    protected $name;
    /**
     * A human-readable string that is used as a unique identifier for each region.
     *
     * @var string
     */
    protected $slug;
    /**
     * This attribute is set to an array which contains features available in this region
     *
     * @var list<string>
     */
    protected $features;
    /**
     * This is a boolean value that represents whether new Droplets can be created in this region.
     *
     * @var bool
     */
    protected $available;
    /**
     * This attribute is set to an array which contains the identifying slugs for the sizes available in this region. sizes:read is required to view.
     *
     * @var list<string>
     */
    protected $sizes;
    /**
     * The display name of the region.  This will be a full name that is used in the control panel and other interfaces.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The display name of the region.  This will be a full name that is used in the control panel and other interfaces.
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
     * A human-readable string that is used as a unique identifier for each region.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * A human-readable string that is used as a unique identifier for each region.
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
     * This attribute is set to an array which contains features available in this region
     *
     * @return list<string>
     */
    public function getFeatures(): array
    {
        return $this->features;
    }
    /**
     * This attribute is set to an array which contains features available in this region
     *
     * @param list<string> $features
     *
     * @return self
     */
    public function setFeatures(array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
    /**
     * This is a boolean value that represents whether new Droplets can be created in this region.
     *
     * @return bool
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }
    /**
     * This is a boolean value that represents whether new Droplets can be created in this region.
     *
     * @param bool $available
     *
     * @return self
     */
    public function setAvailable(bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * This attribute is set to an array which contains the identifying slugs for the sizes available in this region. sizes:read is required to view.
     *
     * @return list<string>
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
     * This attribute is set to an array which contains the identifying slugs for the sizes available in this region. sizes:read is required to view.
     *
     * @param list<string> $sizes
     *
     * @return self
     */
    public function setSizes(array $sizes): self
    {
        $this->initialized['sizes'] = true;
        $this->sizes = $sizes;
        return $this;
    }
}