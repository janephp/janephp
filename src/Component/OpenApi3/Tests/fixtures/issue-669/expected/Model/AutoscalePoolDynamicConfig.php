<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AutoscalePoolDynamicConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The minimum number of Droplets in an autoscale pool.
     *
     * @var int
     */
    public int $minInstances;
    /**
     * The maximum number of Droplets in an autoscale pool.
     *
     * @var int
     */
    public int $maxInstances;
    /**
     * Target CPU utilization as a decimal.
     *
     * @var float
     */
    public float $targetCpuUtilization;
    /**
     * Target memory utilization as a decimal.
     *
     * @var float
     */
    public float $targetMemoryUtilization;
    /**
     * The number of minutes to wait between scaling events in an autoscale pool. Defaults to 10 minutes.
     *
     * @var int
     */
    public int $cooldownMinutes;
    public function definedProperties(): array
    {
        return ['minInstances' => 'min_instances', 'maxInstances' => 'max_instances', 'targetCpuUtilization' => 'target_cpu_utilization', 'targetMemoryUtilization' => 'target_memory_utilization', 'cooldownMinutes' => 'cooldown_minutes'];
    }
}