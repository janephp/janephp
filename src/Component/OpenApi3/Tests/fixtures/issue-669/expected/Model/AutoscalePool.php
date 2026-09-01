<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AutoscalePool implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identifier for each autoscale pool instance. This is automatically generated upon autoscale pool creation.
     *
     * @var string
     */
    public string $id;
    /**
     * The human-readable name set for the autoscale pool.
     *
     * @var string
     */
    public string $name;
    /**
     * The scaling configuration for an autoscale pool, which is how the pool scales up and down (either by resource utilization or static configuration).
     *
     * @var array<string, mixed>
     */
    public iterable $config;
    /**
     * @var AutoscalePoolDropletTemplate
     */
    public AutoscalePoolDropletTemplate $dropletTemplate;
    /**
     * @var CurrentUtilization
     */
    public CurrentUtilization $currentUtilization;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the autoscale pool was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the autoscale pool was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * The current status of the autoscale pool.
     *
     * @var string
     */
    public string $status;
    /**
     * The number of active Droplets in the autoscale pool.
     *
     * @var int
     */
    public int $activeResourcesCount;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'config' => 'config', 'dropletTemplate' => 'droplet_template', 'currentUtilization' => 'current_utilization', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at', 'status' => 'status', 'activeResourcesCount' => 'active_resources_count'];
    }
}