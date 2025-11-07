<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseVolumeSnapshot extends \ArrayObject
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
     * @var Snapshots
     */
    protected $snapshot;
    /**
     * @return Snapshots
     */
    public function getSnapshot(): Snapshots
    {
        return $this->snapshot;
    }
    /**
     * @param Snapshots $snapshot
     *
     * @return self
     */
    public function setSnapshot(Snapshots $snapshot): self
    {
        $this->initialized['snapshot'] = true;
        $this->snapshot = $snapshot;
        return $this;
    }
}