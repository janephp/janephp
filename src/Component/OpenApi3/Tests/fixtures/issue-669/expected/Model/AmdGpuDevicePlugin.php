<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AmdGpuDevicePlugin implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates whether the AMD GPU Device Plugin is enabled.
     *
     * @var bool
     */
    public bool $enabled;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled'];
    }
}