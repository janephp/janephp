<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VolumeActionPostBase implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['type' => 'type', 'region' => 'region'];
    }
}