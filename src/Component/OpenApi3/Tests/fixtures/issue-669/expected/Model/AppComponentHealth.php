<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentHealth implements AdditionalPropertiesInterface
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
    protected $name;
    /**
     * @var float
     */
    protected $cpuUsagePercent;
    /**
     * @var float
     */
    protected $memoryUsagePercent;
    /**
     * @var int
     */
    protected $replicasDesired;
    /**
     * @var int
     */
    protected $replicasReady;
    /**
     * @var string
     */
    protected $state = 'UNKNOWN';
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
     * @return float
     */
    public function getCpuUsagePercent(): float
    {
        return $this->cpuUsagePercent;
    }
    /**
     * @param float $cpuUsagePercent
     *
     * @return self
     */
    public function setCpuUsagePercent(float $cpuUsagePercent): self
    {
        $this->initialized['cpuUsagePercent'] = true;
        $this->cpuUsagePercent = $cpuUsagePercent;
        return $this;
    }
    /**
     * @return float
     */
    public function getMemoryUsagePercent(): float
    {
        return $this->memoryUsagePercent;
    }
    /**
     * @param float $memoryUsagePercent
     *
     * @return self
     */
    public function setMemoryUsagePercent(float $memoryUsagePercent): self
    {
        $this->initialized['memoryUsagePercent'] = true;
        $this->memoryUsagePercent = $memoryUsagePercent;
        return $this;
    }
    /**
     * @return int
     */
    public function getReplicasDesired(): int
    {
        return $this->replicasDesired;
    }
    /**
     * @param int $replicasDesired
     *
     * @return self
     */
    public function setReplicasDesired(int $replicasDesired): self
    {
        $this->initialized['replicasDesired'] = true;
        $this->replicasDesired = $replicasDesired;
        return $this;
    }
    /**
     * @return int
     */
    public function getReplicasReady(): int
    {
        return $this->replicasReady;
    }
    /**
     * @param int $replicasReady
     *
     * @return self
     */
    public function setReplicasReady(int $replicasReady): self
    {
        $this->initialized['replicasReady'] = true;
        $this->replicasReady = $replicasReady;
        return $this;
    }
    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'cpuUsagePercent' => ['cpu_usage_percent', 'getCpuUsagePercent', 'setCpuUsagePercent'], 'memoryUsagePercent' => ['memory_usage_percent', 'getMemoryUsagePercent', 'setMemoryUsagePercent'], 'replicasDesired' => ['replicas_desired', 'getReplicasDesired', 'setReplicasDesired'], 'replicasReady' => ['replicas_ready', 'getReplicasReady', 'setReplicasReady'], 'state' => ['state', 'getState', 'setState']];
    }
}