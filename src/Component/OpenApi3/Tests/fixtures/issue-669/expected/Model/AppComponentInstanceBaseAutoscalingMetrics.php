<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentInstanceBaseAutoscalingMetrics implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Settings for scaling the component based on CPU utilization.
     *
     * @var AppComponentInstanceBaseAutoscalingMetricsCpu
     */
    public AppComponentInstanceBaseAutoscalingMetricsCpu $cpu;
    public function definedProperties(): array
    {
        return ['cpu' => 'cpu'];
    }
}