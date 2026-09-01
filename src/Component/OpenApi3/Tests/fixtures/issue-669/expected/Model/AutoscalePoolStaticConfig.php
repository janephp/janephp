<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AutoscalePoolStaticConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Fixed number of instances in an autoscale pool.
     *
     * @var int
     */
    public int $targetNumberInstances;
    public function definedProperties(): array
    {
        return ['targetNumberInstances' => 'target_number_instances'];
    }
}