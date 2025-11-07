<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsSnapshotResponse extends \ArrayObject
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
     * The unique identifier of the snapshot.
     *
     * @var string
     */
    protected $id;
    /**
     * The human-readable name of the snapshot.
     *
     * @var string
     */
    protected $name;
    /**
     * The size of the snapshot in GiB.
     *
     * @var int
     */
    protected $sizeGib;
    /**
     * The DigitalOcean region slug where the snapshot is located.
     *
     * @var string
     */
    protected $region;
    /**
     * The current status of the snapshot.
     *
     * @var string
     */
    protected $status;
    /**
     * The timestamp when the snapshot was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The unique identifier of the share from which this snapshot was created.
     *
     * @var string
     */
    protected $shareId;
    /**
     * The unique identifier of the snapshot.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the snapshot.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The human-readable name of the snapshot.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name of the snapshot.
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
    /**
     * The size of the snapshot in GiB.
     *
     * @return int
     */
    public function getSizeGib(): int
    {
        return $this->sizeGib;
    }
    /**
     * The size of the snapshot in GiB.
     *
     * @param int $sizeGib
     *
     * @return self
     */
    public function setSizeGib(int $sizeGib): self
    {
        $this->initialized['sizeGib'] = true;
        $this->sizeGib = $sizeGib;
        return $this;
    }
    /**
     * The DigitalOcean region slug where the snapshot is located.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The DigitalOcean region slug where the snapshot is located.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The current status of the snapshot.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The current status of the snapshot.
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
     * The timestamp when the snapshot was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The timestamp when the snapshot was created.
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
     * The unique identifier of the share from which this snapshot was created.
     *
     * @return string
     */
    public function getShareId(): string
    {
        return $this->shareId;
    }
    /**
     * The unique identifier of the share from which this snapshot was created.
     *
     * @param string $shareId
     *
     * @return self
     */
    public function setShareId(string $shareId): self
    {
        $this->initialized['shareId'] = true;
        $this->shareId = $shareId;
        return $this;
    }
}