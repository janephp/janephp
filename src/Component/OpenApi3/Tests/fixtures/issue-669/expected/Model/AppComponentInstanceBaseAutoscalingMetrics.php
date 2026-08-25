<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentInstanceBaseAutoscalingMetrics implements AdditionalPropertiesInterface
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
     * Settings for scaling the component based on CPU utilization.
     *
     * @var AppComponentInstanceBaseAutoscalingMetricsCpu
     */
    protected $cpu;
    /**
     * Settings for scaling the component based on CPU utilization.
     *
     * @return AppComponentInstanceBaseAutoscalingMetricsCpu
     */
    public function getCpu(): AppComponentInstanceBaseAutoscalingMetricsCpu
    {
        return $this->cpu;
    }
    /**
     * Settings for scaling the component based on CPU utilization.
     *
     * @param AppComponentInstanceBaseAutoscalingMetricsCpu $cpu
     *
     * @return self
     */
    public function setCpu(AppComponentInstanceBaseAutoscalingMetricsCpu $cpu): self
    {
        $this->initialized['cpu'] = true;
        $this->cpu = $cpu;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['cpu' => ['cpu', 'getCpu', 'setCpu']];
    }
}