<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsSnapshotListResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<NfsSnapshotResponse>
     */
    protected $snapshots;
    /**
     * @return list<NfsSnapshotResponse>
     */
    public function getSnapshots(): array
    {
        return $this->snapshots;
    }
    /**
     * @param list<NfsSnapshotResponse> $snapshots
     *
     * @return self
     */
    public function setSnapshots(array $snapshots): self
    {
        $this->initialized['snapshots'] = true;
        $this->snapshots = $snapshots;
        return $this;
    }
}