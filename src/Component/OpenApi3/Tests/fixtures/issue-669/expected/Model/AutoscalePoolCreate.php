<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AutoscalePoolCreate implements AdditionalPropertiesInterface
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
     * The human-readable name of the autoscale pool. This field cannot be updated
     *
     * @var string
     */
    protected $name;
    /**
     * The scaling configuration for an autoscale pool, which is how the pool scales up and down (either by resource utilization or static configuration).
     *
     * @var array<string, mixed>
     */
    protected $config;
    /**
     * @var AutoscalePoolDropletTemplate
     */
    protected $dropletTemplate;
    /**
     * The human-readable name of the autoscale pool. This field cannot be updated
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name of the autoscale pool. This field cannot be updated
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
     * The scaling configuration for an autoscale pool, which is how the pool scales up and down (either by resource utilization or static configuration).
     *
     * @return array<string, mixed>
     */
    public function getConfig(): iterable
    {
        return $this->config;
    }
    /**
     * The scaling configuration for an autoscale pool, which is how the pool scales up and down (either by resource utilization or static configuration).
     *
     * @param array<string, mixed> $config
     *
     * @return self
     */
    public function setConfig(iterable $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * @return AutoscalePoolDropletTemplate
     */
    public function getDropletTemplate(): AutoscalePoolDropletTemplate
    {
        return $this->dropletTemplate;
    }
    /**
     * @param AutoscalePoolDropletTemplate $dropletTemplate
     *
     * @return self
     */
    public function setDropletTemplate(AutoscalePoolDropletTemplate $dropletTemplate): self
    {
        $this->initialized['dropletTemplate'] = true;
        $this->dropletTemplate = $dropletTemplate;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'config' => ['config', 'getConfig', 'setConfig'], 'dropletTemplate' => ['droplet_template', 'getDropletTemplate', 'setDropletTemplate']];
    }
}