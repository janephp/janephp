<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentInstanceBaseAutoscaling implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The minimum amount of instances for this component. Must be less than max_instance_count.
     *
     * @var int
     */
    public int $minInstanceCount;
    /**
     * The maximum amount of instances for this component. Must be more than min_instance_count.
     *
     * @var int
     */
    public int $maxInstanceCount;
    /**
     * The metrics that the component is scaled on.
     *
     * @var AppComponentInstanceBaseAutoscalingMetrics
     */
    public AppComponentInstanceBaseAutoscalingMetrics $metrics;
    public function definedProperties(): array
    {
        return ['minInstanceCount' => 'min_instance_count', 'maxInstanceCount' => 'max_instance_count', 'metrics' => 'metrics'];
    }
}