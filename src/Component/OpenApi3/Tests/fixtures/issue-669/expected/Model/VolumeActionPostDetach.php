<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VolumeActionPostDetach implements AdditionalPropertiesInterface
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
     * The unique identifier for the Droplet the volume will be attached or detached from.
     *
     * @var int
     */
    public int $dropletId;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'region' => 'region', 'dropletId' => 'droplet_id'];
    }
}