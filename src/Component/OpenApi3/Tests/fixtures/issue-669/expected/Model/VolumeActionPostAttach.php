<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VolumeActionPostAttach implements AdditionalPropertiesInterface
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
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    public ?array $tags;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'region' => 'region', 'dropletId' => 'droplet_id', 'tags' => 'tags'];
    }
}