<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AutoscalePoolCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The human-readable name of the autoscale pool. This field cannot be updated
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
    public function definedProperties(): array
    {
        return ['name' => 'name', 'config' => 'config', 'dropletTemplate' => 'droplet_template'];
    }
}