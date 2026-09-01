<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentInstanceBaseAutoscalingMetricsCpu implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The average target CPU utilization for the component.
     *
     * @var int
     */
    public int $percent = 80;
    public function definedProperties(): array
    {
        return ['percent' => 'percent'];
    }
}