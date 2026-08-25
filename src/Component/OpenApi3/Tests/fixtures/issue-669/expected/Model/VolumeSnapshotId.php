<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VolumeSnapshotId implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The unique identifier for the volume snapshot from which to create the volume.
     *
     * @var string
     */
    protected $snapshotId;
    /**
     * The unique identifier for the volume snapshot from which to create the volume.
     *
     * @return string
     */
    public function getSnapshotId(): string
    {
        return $this->snapshotId;
    }
    /**
     * The unique identifier for the volume snapshot from which to create the volume.
     *
     * @param string $snapshotId
     *
     * @return self
     */
    public function setSnapshotId(string $snapshotId): self
    {
        $this->initialized['snapshotId'] = true;
        $this->snapshotId = $snapshotId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['snapshotId' => ['snapshot_id', 'getSnapshotId', 'setSnapshotId']];
    }
}