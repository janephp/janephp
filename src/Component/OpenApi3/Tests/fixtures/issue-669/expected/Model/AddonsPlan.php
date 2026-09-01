<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsPlan implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of a given plan.
     *
     * @var int
     */
    public int $id;
    /**
     * ID of the app associated with this plan.
     *
     * @var int
     */
    public int $appId;
    /**
     * Display name for a given plan.
     *
     * @var string
     */
    public string $displayName;
    /**
     * Description of an app plan.
     *
     * @var string
     */
    public string $description;
    /**
     * Slug identifier for the plan.
     *
     * @var string
     */
    public string $slug;
    /**
     * Price of a month's usage of the plan in US dollars.
     *
     * @var int
     */
    public int $pricePerMonth;
    /**
     * Indicates if the plan is currently active.
     *
     * @var bool
     */
    public bool $active;
    /**
     * Current state of the plan.
     *
     * @var string
     */
    public string $state;
    /**
     * List of features included in the plan.
     *
     * @var list<AddonsFeature>
     */
    public array $features;
    /**
     * Timestamp when the plan was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Timestamp when the plan was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Indicates if the plan is available for selection.
     *
     * @var bool
     */
    public bool $available;
    /**
     * Unique identifier for the plan.
     *
     * @var string
     */
    public string $uuid;
    /**
     * Indicates if this plan is the default option for the app.
     *
     * @var bool
     */
    public bool $byDefault;
    /**
     * List of dimensions associated with the plan, each with its own pricing.
     *
     * @var list<AddonsDimensionWithPrice>
     */
    public array $dimensions;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'appId' => 'app_id', 'displayName' => 'display_name', 'description' => 'description', 'slug' => 'slug', 'pricePerMonth' => 'price_per_month', 'active' => 'active', 'state' => 'state', 'features' => 'features', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at', 'available' => 'available', 'uuid' => 'uuid', 'byDefault' => 'by_default', 'dimensions' => 'dimensions'];
    }
}