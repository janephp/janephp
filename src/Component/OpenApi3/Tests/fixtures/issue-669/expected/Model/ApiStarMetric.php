<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiStarMetric extends \ArrayObject
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
    protected $metricUuid;
    /**
     * @var string
     */
    protected $name;
    /**
     * The success threshold for the star metric.
     * This is a value that the metric must reach to be considered successful.
     *
     * @var float
     */
    protected $successThreshold;
    /**
     * The success threshold for the star metric.
     * This is a percentage value between 0 and 100.
     *
     * @var int
     */
    protected $successThresholdPct;
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
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The success threshold for the star metric.
     * This is a value that the metric must reach to be considered successful.
     *
     * @return float
     */
    public function getSuccessThreshold(): float
    {
        return $this->successThreshold;
    }
    /**
    * The success threshold for the star metric.
    This is a value that the metric must reach to be considered successful.
    *
    * @param float $successThreshold
    *
    * @return self
    */
    public function setSuccessThreshold(float $successThreshold): self
    {
        $this->initialized['successThreshold'] = true;
        $this->successThreshold = $successThreshold;
        return $this;
    }
    /**
     * The success threshold for the star metric.
     * This is a percentage value between 0 and 100.
     *
     * @return int
     */
    public function getSuccessThresholdPct(): int
    {
        return $this->successThresholdPct;
    }
    /**
    * The success threshold for the star metric.
    This is a percentage value between 0 and 100.
    *
    * @param int $successThresholdPct
    *
    * @return self
    */
    public function setSuccessThresholdPct(int $successThresholdPct): self
    {
        $this->initialized['successThresholdPct'] = true;
        $this->successThresholdPct = $successThresholdPct;
        return $this;
    }
}