<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2VolumesVolumeIdSnapshotsPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A human-readable name for the volume snapshot.
     *
     * @var string
     */
    public string $name;
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    public ?array $tags;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'tags' => 'tags'];
    }
}