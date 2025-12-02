<?php

namespace Jane\Generated\DigitalOcean\Model;

class AddonsPlan extends \ArrayObject
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
     * ID of a given plan.
     *
     * @var int
     */
    protected $id;
    /**
     * ID of the app associated with this plan.
     *
     * @var int
     */
    protected $appId;
    /**
     * Display name for a given plan.
     *
     * @var string
     */
    protected $displayName;
    /**
     * Description of an app plan.
     *
     * @var string
     */
    protected $description;
    /**
     * Slug identifier for the plan.
     *
     * @var string
     */
    protected $slug;
    /**
     * Price of a month's usage of the plan in US dollars.
     *
     * @var int
     */
    protected $pricePerMonth;
    /**
     * Indicates if the plan is currently active.
     *
     * @var bool
     */
    protected $active;
    /**
     * Current state of the plan.
     *
     * @var string
     */
    protected $state;
    /**
     * List of features included in the plan.
     *
     * @var list<AddonsFeature>
     */
    protected $features;
    /**
     * Timestamp when the plan was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Timestamp when the plan was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Indicates if the plan is available for selection.
     *
     * @var bool
     */
    protected $available;
    /**
     * Unique identifier for the plan.
     *
     * @var string
     */
    protected $uuid;
    /**
     * Indicates if this plan is the default option for the app.
     *
     * @var bool
     */
    protected $byDefault;
    /**
     * List of dimensions associated with the plan, each with its own pricing.
     *
     * @var list<AddonsDimensionWithPrice>
     */
    protected $dimensions;
    /**
     * ID of a given plan.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID of a given plan.
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
     * ID of the app associated with this plan.
     *
     * @return int
     */
    public function getAppId(): int
    {
        return $this->appId;
    }
    /**
     * ID of the app associated with this plan.
     *
     * @param int $appId
     *
     * @return self
     */
    public function setAppId(int $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * Display name for a given plan.
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
    /**
     * Display name for a given plan.
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
     * Description of an app plan.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of an app plan.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Slug identifier for the plan.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * Slug identifier for the plan.
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
     * Price of a month's usage of the plan in US dollars.
     *
     * @return int
     */
    public function getPricePerMonth(): int
    {
        return $this->pricePerMonth;
    }
    /**
     * Price of a month's usage of the plan in US dollars.
     *
     * @param int $pricePerMonth
     *
     * @return self
     */
    public function setPricePerMonth(int $pricePerMonth): self
    {
        $this->initialized['pricePerMonth'] = true;
        $this->pricePerMonth = $pricePerMonth;
        return $this;
    }
    /**
     * Indicates if the plan is currently active.
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * Indicates if the plan is currently active.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * Current state of the plan.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * Current state of the plan.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * List of features included in the plan.
     *
     * @return list<AddonsFeature>
     */
    public function getFeatures(): array
    {
        return $this->features;
    }
    /**
     * List of features included in the plan.
     *
     * @param list<AddonsFeature> $features
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
     * Timestamp when the plan was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Timestamp when the plan was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Timestamp when the plan was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Timestamp when the plan was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Indicates if the plan is available for selection.
     *
     * @return bool
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }
    /**
     * Indicates if the plan is available for selection.
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
     * Unique identifier for the plan.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique identifier for the plan.
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * Indicates if this plan is the default option for the app.
     *
     * @return bool
     */
    public function getByDefault(): bool
    {
        return $this->byDefault;
    }
    /**
     * Indicates if this plan is the default option for the app.
     *
     * @param bool $byDefault
     *
     * @return self
     */
    public function setByDefault(bool $byDefault): self
    {
        $this->initialized['byDefault'] = true;
        $this->byDefault = $byDefault;
        return $this;
    }
    /**
     * List of dimensions associated with the plan, each with its own pricing.
     *
     * @return list<AddonsDimensionWithPrice>
     */
    public function getDimensions(): array
    {
        return $this->dimensions;
    }
    /**
     * List of dimensions associated with the plan, each with its own pricing.
     *
     * @param list<AddonsDimensionWithPrice> $dimensions
     *
     * @return self
     */
    public function setDimensions(array $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}