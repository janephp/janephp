<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsSnapshotGetResponse implements AdditionalPropertiesInterface
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
     * Represents an NFS snapshot.
     *
     * @var NfsSnapshotResponse
     */
    protected $snapshot;
    /**
     * Represents an NFS snapshot.
     *
     * @return NfsSnapshotResponse
     */
    public function getSnapshot(): NfsSnapshotResponse
    {
        return $this->snapshot;
    }
    /**
     * Represents an NFS snapshot.
     *
     * @param NfsSnapshotResponse $snapshot
     *
     * @return self
     */
    public function setSnapshot(NfsSnapshotResponse $snapshot): self
    {
        $this->initialized['snapshot'] = true;
        $this->snapshot = $snapshot;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['snapshot' => ['snapshot', 'getSnapshot', 'setSnapshot']];
    }
}