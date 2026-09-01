<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VolumeActionPostResize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The volume action to initiate.
     *
     * @var string
     */
    public string $type;
    /**
     * The slug identifier for the region where the resource will initially be available.
     *
     * @var string
     */
    public string $region;
    /**
     * The new size of the block storage volume in GiB (1024^3).
     *
     * @var int
     */
    public int $sizeGigabytes;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'region' => 'region', 'sizeGigabytes' => 'size_gigabytes'];
    }
}