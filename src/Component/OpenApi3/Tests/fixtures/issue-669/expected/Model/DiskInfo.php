<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DiskInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of disk. All Droplets contain a `local` disk. Additionally, GPU Droplets can also have a `scratch` disk for non-persistent data.
     *
     * @var string
     */
    public string $type;
    /**
     * @var DiskInfoSize
     */
    public DiskInfoSize $size;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'size' => 'size'];
    }
}