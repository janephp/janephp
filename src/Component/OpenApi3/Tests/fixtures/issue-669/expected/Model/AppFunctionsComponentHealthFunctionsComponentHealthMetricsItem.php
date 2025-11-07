<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem extends \ArrayObject
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
     * @var string
     */
    protected $metricLabel;
    /**
     * @var float
     */
    protected $metricValue;
    /**
     * @var string
     */
    protected $timeWindow;
    /**
     * @return string
     */
    public function getMetricLabel(): string
    {
        return $this->metricLabel;
    }
    /**
     * @param string $metricLabel
     *
     * @return self
     */
    public function setMetricLabel(string $metricLabel): self
    {
        $this->initialized['metricLabel'] = true;
        $this->metricLabel = $metricLabel;
        return $this;
    }
    /**
     * @return float
     */
    public function getMetricValue(): float
    {
        return $this->metricValue;
    }
    /**
     * @param float $metricValue
     *
     * @return self
     */
    public function setMetricValue(float $metricValue): self
    {
        $this->initialized['metricValue'] = true;
        $this->metricValue = $metricValue;
        return $this;
    }
    /**
     * @return string
     */
    public function getTimeWindow(): string
    {
        return $this->timeWindow;
    }
    /**
     * @param string $timeWindow
     *
     * @return self
     */
    public function setTimeWindow(string $timeWindow): self
    {
        $this->initialized['timeWindow'] = true;
        $this->timeWindow = $timeWindow;
        return $this;
    }
}