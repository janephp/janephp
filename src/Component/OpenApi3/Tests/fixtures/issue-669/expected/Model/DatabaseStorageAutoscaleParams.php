<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseStorageAutoscaleParams implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Whether storage autoscaling is enabled for the cluster
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * The storage usage threshold percentage that triggers autoscaling. When storage usage exceeds this percentage, additional storage will be added automatically.
     *
     * @var int
     */
    public int $thresholdPercent;
    /**
     * The amount of additional storage to add (in GiB) when autoscaling is triggered
     *
     * @var int
     */
    public int $incrementGib;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled', 'thresholdPercent' => 'threshold_percent', 'incrementGib' => 'increment_gib'];
    }
}