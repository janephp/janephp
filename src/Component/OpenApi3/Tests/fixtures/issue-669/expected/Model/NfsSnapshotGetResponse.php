<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsSnapshotGetResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Represents an NFS snapshot.
     *
     * @var NfsSnapshotResponse
     */
    public NfsSnapshotResponse $snapshot;
    public function definedProperties(): array
    {
        return ['snapshot' => 'snapshot'];
    }
}