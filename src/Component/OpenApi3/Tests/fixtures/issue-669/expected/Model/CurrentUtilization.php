<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CurrentUtilization implements AdditionalPropertiesInterface
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
     * The average memory utilization of the autoscale pool.
     *
     * @var float
     */
    protected $memory;
    /**
     * The average CPU utilization of the autoscale pool.
     *
     * @var float
     */
    protected $cpu;
    /**
     * The average memory utilization of the autoscale pool.
     *
     * @return float
     */
    public function getMemory(): float
    {
        return $this->memory;
    }
    /**
     * The average memory utilization of the autoscale pool.
     *
     * @param float $memory
     *
     * @return self
     */
    public function setMemory(float $memory): self
    {
        $this->initialized['memory'] = true;
        $this->memory = $memory;
        return $this;
    }
    /**
     * The average CPU utilization of the autoscale pool.
     *
     * @return float
     */
    public function getCpu(): float
    {
        return $this->cpu;
    }
    /**
     * The average CPU utilization of the autoscale pool.
     *
     * @param float $cpu
     *
     * @return self
     */
    public function setCpu(float $cpu): self
    {
        $this->initialized['cpu'] = true;
        $this->cpu = $cpu;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['memory' => ['memory', 'getMemory', 'setMemory'], 'cpu' => ['cpu', 'getCpu', 'setCpu']];
    }
}