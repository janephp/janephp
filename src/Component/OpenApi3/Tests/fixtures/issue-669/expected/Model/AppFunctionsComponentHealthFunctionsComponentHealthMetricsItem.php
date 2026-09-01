<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $metricLabel;
    /**
     * @var float
     */
    public float $metricValue;
    /**
     * @var string
     */
    public string $timeWindow;
    public function definedProperties(): array
    {
        return ['metricLabel' => 'metric_label', 'metricValue' => 'metric_value', 'timeWindow' => 'time_window'];
    }
}