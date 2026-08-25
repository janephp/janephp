<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationMetric implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $category = 'METRIC_CATEGORY_UNSPECIFIED';
    /**
     * @var string
     */
    protected $description;
    /**
     * If true, the metric is inverted, meaning that a lower value is better.
     *
     * @var bool
     */
    protected $inverted;
    /**
     * @var bool
     */
    protected $isMetricGoal;
    /**
     * @var string
     */
    protected $metricName;
    /**
     * @var int
     */
    protected $metricRank;
    /**
     * @var string
     */
    protected $metricType = 'METRIC_TYPE_UNSPECIFIED';
    /**
     * @var string
     */
    protected $metricUuid;
    /**
     * @var string
     */
    protected $metricValueType = 'METRIC_VALUE_TYPE_UNSPECIFIED';
    /**
     * The maximum value for the metric.
     *
     * @var float
     */
    protected $rangeMax;
    /**
     * The minimum value for the metric.
     *
     * @var float
     */
    protected $rangeMin;
    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * If true, the metric is inverted, meaning that a lower value is better.
     *
     * @return bool
     */
    public function getInverted(): bool
    {
        return $this->inverted;
    }
    /**
     * If true, the metric is inverted, meaning that a lower value is better.
     *
     * @param bool $inverted
     *
     * @return self
     */
    public function setInverted(bool $inverted): self
    {
        $this->initialized['inverted'] = true;
        $this->inverted = $inverted;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsMetricGoal(): bool
    {
        return $this->isMetricGoal;
    }
    /**
     * @param bool $isMetricGoal
     *
     * @return self
     */
    public function setIsMetricGoal(bool $isMetricGoal): self
    {
        $this->initialized['isMetricGoal'] = true;
        $this->isMetricGoal = $isMetricGoal;
        return $this;
    }
    /**
     * @return string
     */
    public function getMetricName(): string
    {
        return $this->metricName;
    }
    /**
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
     * @return int
     */
    public function getMetricRank(): int
    {
        return $this->metricRank;
    }
    /**
     * @param int $metricRank
     *
     * @return self
     */
    public function setMetricRank(int $metricRank): self
    {
        $this->initialized['metricRank'] = true;
        $this->metricRank = $metricRank;
        return $this;
    }
    /**
     * @return string
     */
    public function getMetricType(): string
    {
        return $this->metricType;
    }
    /**
     * @param string $metricType
     *
     * @return self
     */
    public function setMetricType(string $metricType): self
    {
        $this->initialized['metricType'] = true;
        $this->metricType = $metricType;
        return $this;
    }
    /**
     * @return string
     */
    public function getMetricUuid(): string
    {
        return $this->metricUuid;
    }
    /**
     * @param string $metricUuid
     *
     * @return self
     */
    public function setMetricUuid(string $metricUuid): self
    {
        $this->initialized['metricUuid'] = true;
        $this->metricUuid = $metricUuid;
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
     * The maximum value for the metric.
     *
     * @return float
     */
    public function getRangeMax(): float
    {
        return $this->rangeMax;
    }
    /**
     * The maximum value for the metric.
     *
     * @param float $rangeMax
     *
     * @return self
     */
    public function setRangeMax(float $rangeMax): self
    {
        $this->initialized['rangeMax'] = true;
        $this->rangeMax = $rangeMax;
        return $this;
    }
    /**
     * The minimum value for the metric.
     *
     * @return float
     */
    public function getRangeMin(): float
    {
        return $this->rangeMin;
    }
    /**
     * The minimum value for the metric.
     *
     * @param float $rangeMin
     *
     * @return self
     */
    public function setRangeMin(float $rangeMin): self
    {
        $this->initialized['rangeMin'] = true;
        $this->rangeMin = $rangeMin;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['category' => ['category', 'getCategory', 'setCategory'], 'description' => ['description', 'getDescription', 'setDescription'], 'inverted' => ['inverted', 'getInverted', 'setInverted'], 'isMetricGoal' => ['is_metric_goal', 'getIsMetricGoal', 'setIsMetricGoal'], 'metricName' => ['metric_name', 'getMetricName', 'setMetricName'], 'metricRank' => ['metric_rank', 'getMetricRank', 'setMetricRank'], 'metricType' => ['metric_type', 'getMetricType', 'setMetricType'], 'metricUuid' => ['metric_uuid', 'getMetricUuid', 'setMetricUuid'], 'metricValueType' => ['metric_value_type', 'getMetricValueType', 'setMetricValueType'], 'rangeMax' => ['range_max', 'getRangeMax', 'setRangeMax'], 'rangeMin' => ['range_min', 'getRangeMin', 'setRangeMin']];
    }
}