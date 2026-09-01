<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VolumeBaseRead implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the block storage volume.
     *
     * @var string
     */
    public string $id;
    /**
     * An array containing the IDs of the Droplets the volume is attached to. Note that at this time, a volume can only be attached to a single Droplet.
     *
     * @var list<int>|null
     */
    public ?array $dropletIds;
    /**
     * A human-readable name for the block storage volume. Must be lowercase and be composed only of numbers, letters and "-", up to a limit of 64 characters. The name must begin with a letter.
     *
     * @var string
     */
    public string $name;
    /**
     * An optional free-form text field to describe a block storage volume.
     *
     * @var string
     */
    public string $description;
    /**
     * The size of the block storage volume in GiB (1024^3). This field does not apply  when creating a volume from a snapshot.
     *
     * @var int
     */
    public int $sizeGigabytes;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the block storage volume was created.
     *
     * @var string
     */
    public string $createdAt;
    /**
     * A flat array of tag names as strings applied to the resource. <br><br>Requires `tag:read` scope.
     *
     * @var list<string>|null
     */
    public ?array $tags;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'dropletIds' => 'droplet_ids', 'name' => 'name', 'description' => 'description', 'sizeGigabytes' => 'size_gigabytes', 'createdAt' => 'created_at', 'tags' => 'tags'];
    }
}