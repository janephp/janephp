<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VolumeSnapshotId implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the volume snapshot from which to create the volume.
     *
     * @var string
     */
    public string $snapshotId;
    public function definedProperties(): array
    {
        return ['snapshotId' => 'snapshot_id'];
    }
}