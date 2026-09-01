<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentHealth implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var float
     */
    public float $cpuUsagePercent;
    /**
     * @var float
     */
    public float $memoryUsagePercent;
    /**
     * @var int
     */
    public int $replicasDesired;
    /**
     * @var int
     */
    public int $replicasReady;
    /**
     * @var string
     */
    public string $state = 'UNKNOWN';
    public function definedProperties(): array
    {
        return ['name' => 'name', 'cpuUsagePercent' => 'cpu_usage_percent', 'memoryUsagePercent' => 'memory_usage_percent', 'replicasDesired' => 'replicas_desired', 'replicasReady' => 'replicas_ready', 'state' => 'state'];
    }
}