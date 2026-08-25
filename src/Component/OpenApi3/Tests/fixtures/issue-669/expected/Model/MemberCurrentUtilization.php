<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MemberCurrentUtilization implements AdditionalPropertiesInterface
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
     * The memory utilization average of the individual Droplet.
     *
     * @var float
     */
    protected $memory;
    /**
     * The CPU utilization average of the individual Droplet.
     *
     * @var float
     */
    protected $cpu;
    /**
     * The memory utilization average of the individual Droplet.
     *
     * @return float
     */
    public function getMemory(): float
    {
        return $this->memory;
    }
    /**
     * The memory utilization average of the individual Droplet.
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
     * The CPU utilization average of the individual Droplet.
     *
     * @return float
     */
    public function getCpu(): float
    {
        return $this->cpu;
    }
    /**
     * The CPU utilization average of the individual Droplet.
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