<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsActionSnapshotParams extends \ArrayObject
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
     * Snapshot name of the NFS share
     *
     * @var string
     */
    protected $name;
    /**
     * Snapshot name of the NFS share
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Snapshot name of the NFS share
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}