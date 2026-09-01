<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Snapshots implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the snapshot.
     *
     * @var string
     */
    public string $id;
    /**
     * A human-readable name for the snapshot.
     *
     * @var string
     */
    public string $name;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the snapshot was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * An array of the regions that the snapshot is available in. The regions are represented by their identifying slug values.
     *
     * @var list<string>
     */
    public array $regions;
    /**
     * The minimum size in GB required for a volume or Droplet to use this snapshot.
     *
     * @var int
     */
    public int $minDiskSize;
    /**
     * The billable size of the snapshot in gigabytes.
     *
     * @var float
     */
    public float $sizeGigabytes;
    /**
     * The unique identifier for the resource that the snapshot originated from.
     *
     * @var string
     */
    public string $resourceId;
    /**
     * The type of resource that the snapshot originated from.
     *
     * @var string
     */
    public string $resourceType;
    /**
     * An array of Tags the snapshot has been tagged with.<br><br>Requires `tag:read` scope.
     *
     * @var list<string>|null
     */
    public ?array $tags;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'createdAt' => 'created_at', 'regions' => 'regions', 'minDiskSize' => 'min_disk_size', 'sizeGigabytes' => 'size_gigabytes', 'resourceId' => 'resource_id', 'resourceType' => 'resource_type', 'tags' => 'tags'];
    }
}