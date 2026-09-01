<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationMetricResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Error description if the metric could not be calculated.
     *
     * @var string
     */
    public string $errorDescription;
    /**
     * Metric name
     *
     * @var string
     */
    public string $metricName;
    /**
     * @var string
     */
    public string $metricValueType = 'METRIC_VALUE_TYPE_UNSPECIFIED';
    /**
     * The value of the metric as a number.
     *
     * @var float
     */
    public float $numberValue;
    /**
     * Reasoning of the metric result.
     *
     * @var string
     */
    public string $reasoning;
    /**
     * The value of the metric as a string.
     *
     * @var string
     */
    public string $stringValue;
    public function definedProperties(): array
    {
        return ['errorDescription' => 'error_description', 'metricName' => 'metric_name', 'metricValueType' => 'metric_value_type', 'numberValue' => 'number_value', 'reasoning' => 'reasoning', 'stringValue' => 'string_value'];
    }
}