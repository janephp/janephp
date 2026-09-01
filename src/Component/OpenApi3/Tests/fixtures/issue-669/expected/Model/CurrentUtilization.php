<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CurrentUtilization implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The average memory utilization of the autoscale pool.
     *
     * @var float
     */
    public float $memory;
    /**
     * The average CPU utilization of the autoscale pool.
     *
     * @var float
     */
    public float $cpu;
    public function definedProperties(): array
    {
        return ['memory' => 'memory', 'cpu' => 'cpu'];
    }
}