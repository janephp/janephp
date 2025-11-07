<?php

namespace Jane\Generated\DigitalOcean\Model;

class AutoscalePoolDynamicConfig extends \ArrayObject
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
     * The minimum number of Droplets in an autoscale pool.
     *
     * @var int
     */
    protected $minInstances;
    /**
     * The maximum number of Droplets in an autoscale pool.
     *
     * @var int
     */
    protected $maxInstances;
    /**
     * Target CPU utilization as a decimal.
     *
     * @var float
     */
    protected $targetCpuUtilization;
    /**
     * Target memory utilization as a decimal.
     *
     * @var float
     */
    protected $targetMemoryUtilization;
    /**
     * The number of minutes to wait between scaling events in an autoscale pool. Defaults to 10 minutes.
     *
     * @var int
     */
    protected $cooldownMinutes;
    /**
     * The minimum number of Droplets in an autoscale pool.
     *
     * @return int
     */
    public function getMinInstances(): int
    {
        return $this->minInstances;
    }
    /**
     * The minimum number of Droplets in an autoscale pool.
     *
     * @param int $minInstances
     *
     * @return self
     */
    public function setMinInstances(int $minInstances): self
    {
        $this->initialized['minInstances'] = true;
        $this->minInstances = $minInstances;
        return $this;
    }
    /**
     * The maximum number of Droplets in an autoscale pool.
     *
     * @return int
     */
    public function getMaxInstances(): int
    {
        return $this->maxInstances;
    }
    /**
     * The maximum number of Droplets in an autoscale pool.
     *
     * @param int $maxInstances
     *
     * @return self
     */
    public function setMaxInstances(int $maxInstances): self
    {
        $this->initialized['maxInstances'] = true;
        $this->maxInstances = $maxInstances;
        return $this;
    }
    /**
     * Target CPU utilization as a decimal.
     *
     * @return float
     */
    public function getTargetCpuUtilization(): float
    {
        return $this->targetCpuUtilization;
    }
    /**
     * Target CPU utilization as a decimal.
     *
     * @param float $targetCpuUtilization
     *
     * @return self
     */
    public function setTargetCpuUtilization(float $targetCpuUtilization): self
    {
        $this->initialized['targetCpuUtilization'] = true;
        $this->targetCpuUtilization = $targetCpuUtilization;
        return $this;
    }
    /**
     * Target memory utilization as a decimal.
     *
     * @return float
     */
    public function getTargetMemoryUtilization(): float
    {
        return $this->targetMemoryUtilization;
    }
    /**
     * Target memory utilization as a decimal.
     *
     * @param float $targetMemoryUtilization
     *
     * @return self
     */
    public function setTargetMemoryUtilization(float $targetMemoryUtilization): self
    {
        $this->initialized['targetMemoryUtilization'] = true;
        $this->targetMemoryUtilization = $targetMemoryUtilization;
        return $this;
    }
    /**
     * The number of minutes to wait between scaling events in an autoscale pool. Defaults to 10 minutes.
     *
     * @return int
     */
    public function getCooldownMinutes(): int
    {
        return $this->cooldownMinutes;
    }
    /**
     * The number of minutes to wait between scaling events in an autoscale pool. Defaults to 10 minutes.
     *
     * @param int $cooldownMinutes
     *
     * @return self
     */
    public function setCooldownMinutes(int $cooldownMinutes): self
    {
        $this->initialized['cooldownMinutes'] = true;
        $this->cooldownMinutes = $cooldownMinutes;
        return $this;
    }
}