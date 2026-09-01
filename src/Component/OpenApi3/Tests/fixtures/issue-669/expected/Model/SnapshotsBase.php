<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SnapshotsBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['name' => 'name', 'createdAt' => 'created_at', 'regions' => 'regions', 'minDiskSize' => 'min_disk_size', 'sizeGigabytes' => 'size_gigabytes'];
    }
}