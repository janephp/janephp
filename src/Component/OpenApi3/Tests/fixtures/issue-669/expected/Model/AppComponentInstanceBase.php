<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentInstanceBase implements AdditionalPropertiesInterface
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
     * The amount of instances that this component should be scaled to. Default: 1. Must not be set if autoscaling is used.
     *
     * @var int
     */
    protected $instanceCount = 1;
    /**
     * The instance size to use for this component. Default: `apps-s-1vcpu-0.5gb`
     *
     * @var string|string
     */
    protected $instanceSizeSlug;
    /**
     * Configuration for automatically scaling this component based on metrics.
     *
     * @var AppComponentInstanceBaseAutoscaling
     */
    protected $autoscaling;
    /**
     * The amount of instances that this component should be scaled to. Default: 1. Must not be set if autoscaling is used.
     *
     * @return int
     */
    public function getInstanceCount(): int
    {
        return $this->instanceCount;
    }
    /**
     * The amount of instances that this component should be scaled to. Default: 1. Must not be set if autoscaling is used.
     *
     * @param int $instanceCount
     *
     * @return self
     */
    public function setInstanceCount(int $instanceCount): self
    {
        $this->initialized['instanceCount'] = true;
        $this->instanceCount = $instanceCount;
        return $this;
    }
    /**
     * The instance size to use for this component. Default: `apps-s-1vcpu-0.5gb`
     *
     * @return string|string
     */
    public function getInstanceSizeSlug()
    {
        return $this->instanceSizeSlug;
    }
    /**
     * The instance size to use for this component. Default: `apps-s-1vcpu-0.5gb`
     *
     * @param string|string $instanceSizeSlug
     *
     * @return self
     */
    public function setInstanceSizeSlug($instanceSizeSlug): self
    {
        $this->initialized['instanceSizeSlug'] = true;
        $this->instanceSizeSlug = $instanceSizeSlug;
        return $this;
    }
    /**
     * Configuration for automatically scaling this component based on metrics.
     *
     * @return AppComponentInstanceBaseAutoscaling
     */
    public function getAutoscaling(): AppComponentInstanceBaseAutoscaling
    {
        return $this->autoscaling;
    }
    /**
     * Configuration for automatically scaling this component based on metrics.
     *
     * @param AppComponentInstanceBaseAutoscaling $autoscaling
     *
     * @return self
     */
    public function setAutoscaling(AppComponentInstanceBaseAutoscaling $autoscaling): self
    {
        $this->initialized['autoscaling'] = true;
        $this->autoscaling = $autoscaling;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['instanceCount' => ['instance_count', 'getInstanceCount', 'setInstanceCount'], 'instanceSizeSlug' => ['instance_size_slug', 'getInstanceSizeSlug', 'setInstanceSizeSlug'], 'autoscaling' => ['autoscaling', 'getAutoscaling', 'setAutoscaling']];
    }
}