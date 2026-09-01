<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AmdGpuDeviceMetricsExporterPlugin implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates whether the AMD Device Metrics Exporter is enabled.
     *
     * @var bool
     */
    public bool $enabled;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled'];
    }
}