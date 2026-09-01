<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiStarMetric implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $metricUuid;
    /**
     * @var string
     */
    public string $name;
    /**
     * The success threshold for the star metric.
     * This is a value that the metric must reach to be considered successful.
     *
     * @var float
     */
    public float $successThreshold;
    /**
     * The success threshold for the star metric.
     * This is a percentage value between 0 and 100.
     *
     * @var int
     */
    public int $successThresholdPct;
    public function definedProperties(): array
    {
        return ['metricUuid' => 'metric_uuid', 'name' => 'name', 'successThreshold' => 'success_threshold', 'successThresholdPct' => 'success_threshold_pct'];
    }
}