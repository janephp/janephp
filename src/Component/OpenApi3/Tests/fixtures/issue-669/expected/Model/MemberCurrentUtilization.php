<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MemberCurrentUtilization implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The memory utilization average of the individual Droplet.
     *
     * @var float
     */
    public float $memory;
    /**
     * The CPU utilization average of the individual Droplet.
     *
     * @var float
     */
    public float $cpu;
    public function definedProperties(): array
    {
        return ['memory' => 'memory', 'cpu' => 'cpu'];
    }
}