<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsSnapshotResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier of the snapshot.
     *
     * @var string
     */
    public string $id;
    /**
     * The human-readable name of the snapshot.
     *
     * @var string
     */
    public string $name;
    /**
     * The size of the snapshot in GiB.
     *
     * @var int
     */
    public int $sizeGib;
    /**
     * The DigitalOcean region slug where the snapshot is located.
     *
     * @var string
     */
    public string $region;
    /**
     * The current status of the snapshot.
     *
     * @var string
     */
    public string $status;
    /**
     * The timestamp when the snapshot was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The unique identifier of the share from which this snapshot was created.
     *
     * @var string
     */
    public string $shareId;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'sizeGib' => 'size_gib', 'region' => 'region', 'status' => 'status', 'createdAt' => 'created_at', 'shareId' => 'share_id'];
    }
}