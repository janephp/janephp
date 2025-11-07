<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiEvaluationMetricResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Error description if the metric could not be calculated.
     *
     * @var string
     */
    protected $errorDescription;
    /**
     * Metric name
     *
     * @var string
     */
    protected $metricName;
    /**
     * @var string
     */
    protected $metricValueType = 'METRIC_VALUE_TYPE_UNSPECIFIED';
    /**
     * The value of the metric as a number.
     *
     * @var float
     */
    protected $numberValue;
    /**
     * Reasoning of the metric result.
     *
     * @var string
     */
    protected $reasoning;
    /**
     * The value of the metric as a string.
     *
     * @var string
     */
    protected $stringValue;
    /**
     * Error description if the metric could not be calculated.
     *
     * @return string
     */
    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }
    /**
     * Error description if the metric could not be calculated.
     *
     * @param string $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(string $errorDescription): self
    {
        $this->initialized['errorDescription'] = true;
        $this->errorDescription = $errorDescription;
        return $this;
    }
    /**
     * Metric name
     *
     * @return string
     */
    public function getMetricName(): string
    {
        return $this->metricName;
    }
    /**
     * Metric name
     *
     * @param string $metricName
     *
     * @return self
     */
    public function setMetricName(string $metricName): self
    {
        $this->initialized['metricName'] = true;
        $this->metricName = $metricName;
        return $this;
    }
    /**
     * @return string
     */
    public function getMetricValueType(): string
    {
        return $this->metricValueType;
    }
    /**
     * @param string $metricValueType
     *
     * @return self
     */
    public function setMetricValueType(string $metricValueType): self
    {
        $this->initialized['metricValueType'] = true;
        $this->metricValueType = $metricValueType;
        return $this;
    }
    /**
     * The value of the metric as a number.
     *
     * @return float
     */
    public function getNumberValue(): float
    {
        return $this->numberValue;
    }
    /**
     * The value of the metric as a number.
     *
     * @param float $numberValue
     *
     * @return self
     */
    public function setNumberValue(float $numberValue): self
    {
        $this->initialized['numberValue'] = true;
        $this->numberValue = $numberValue;
        return $this;
    }
    /**
     * Reasoning of the metric result.
     *
     * @return string
     */
    public function getReasoning(): string
    {
        return $this->reasoning;
    }
    /**
     * Reasoning of the metric result.
     *
     * @param string $reasoning
     *
     * @return self
     */
    public function setReasoning(string $reasoning): self
    {
        $this->initialized['reasoning'] = true;
        $this->reasoning = $reasoning;
        return $this;
    }
    /**
     * The value of the metric as a string.
     *
     * @return string
     */
    public function getStringValue(): string
    {
        return $this->stringValue;
    }
    /**
     * The value of the metric as a string.
     *
     * @param string $stringValue
     *
     * @return self
     */
    public function setStringValue(string $stringValue): self
    {
        $this->initialized['stringValue'] = true;
        $this->stringValue = $stringValue;
        return $this;
    }
}