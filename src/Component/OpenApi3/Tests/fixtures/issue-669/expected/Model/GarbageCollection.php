<?php

namespace Jane\Generated\DigitalOcean\Model;

class GarbageCollection extends \ArrayObject
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
     * A string specifying the UUID of the garbage collection.
     *
     * @var string
     */
    protected $uuid;
    /**
     * The name of the container registry.
     *
     * @var string
     */
    protected $registryName;
    /**
     * The current status of this garbage collection.
     *
     * @var string
     */
    protected $status;
    /**
     * The time the garbage collection was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The time the garbage collection was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The number of blobs deleted as a result of this garbage collection.
     *
     * @var int
     */
    protected $blobsDeleted;
    /**
     * The number of bytes freed as a result of this garbage collection.
     *
     * @var int
     */
    protected $freedBytes;
    /**
     * A string specifying the UUID of the garbage collection.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * A string specifying the UUID of the garbage collection.
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * The name of the container registry.
     *
     * @return string
     */
    public function getRegistryName(): string
    {
        return $this->registryName;
    }
    /**
     * The name of the container registry.
     *
     * @param string $registryName
     *
     * @return self
     */
    public function setRegistryName(string $registryName): self
    {
        $this->initialized['registryName'] = true;
        $this->registryName = $registryName;
        return $this;
    }
    /**
     * The current status of this garbage collection.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The current status of this garbage collection.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The time the garbage collection was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The time the garbage collection was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The time the garbage collection was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The time the garbage collection was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The number of blobs deleted as a result of this garbage collection.
     *
     * @return int
     */
    public function getBlobsDeleted(): int
    {
        return $this->blobsDeleted;
    }
    /**
     * The number of blobs deleted as a result of this garbage collection.
     *
     * @param int $blobsDeleted
     *
     * @return self
     */
    public function setBlobsDeleted(int $blobsDeleted): self
    {
        $this->initialized['blobsDeleted'] = true;
        $this->blobsDeleted = $blobsDeleted;
        return $this;
    }
    /**
     * The number of bytes freed as a result of this garbage collection.
     *
     * @return int
     */
    public function getFreedBytes(): int
    {
        return $this->freedBytes;
    }
    /**
     * The number of bytes freed as a result of this garbage collection.
     *
     * @param int $freedBytes
     *
     * @return self
     */
    public function setFreedBytes(int $freedBytes): self
    {
        $this->initialized['freedBytes'] = true;
        $this->freedBytes = $freedBytes;
        return $this;
    }
}