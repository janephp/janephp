<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationMetric implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $category = 'METRIC_CATEGORY_UNSPECIFIED';
    /**
     * @var string
     */
    public string $description;
    /**
     * If true, the metric is inverted, meaning that a lower value is better.
     *
     * @var bool
     */
    public bool $inverted;
    /**
     * @var bool
     */
    public bool $isMetricGoal;
    /**
     * @var string
     */
    public string $metricName;
    /**
     * @var int
     */
    public int $metricRank;
    /**
     * @var string
     */
    public string $metricType = 'METRIC_TYPE_UNSPECIFIED';
    /**
     * @var string
     */
    public string $metricUuid;
    /**
     * @var string
     */
    public string $metricValueType = 'METRIC_VALUE_TYPE_UNSPECIFIED';
    /**
     * The maximum value for the metric.
     *
     * @var float
     */
    public float $rangeMax;
    /**
     * The minimum value for the metric.
     *
     * @var float
     */
    public float $rangeMin;
    public function definedProperties(): array
    {
        return ['category' => 'category', 'description' => 'description', 'inverted' => 'inverted', 'isMetricGoal' => 'is_metric_goal', 'metricName' => 'metric_name', 'metricRank' => 'metric_rank', 'metricType' => 'metric_type', 'metricUuid' => 'metric_uuid', 'metricValueType' => 'metric_value_type', 'rangeMax' => 'range_max', 'rangeMin' => 'range_min'];
    }
}