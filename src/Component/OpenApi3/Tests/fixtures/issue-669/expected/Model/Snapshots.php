<?php

namespace Jane\Generated\DigitalOcean\Model;

class Snapshots extends \ArrayObject
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
     * The unique identifier for the snapshot.
     *
     * @var string
     */
    protected $id;
    /**
     * A human-readable name for the snapshot.
     *
     * @var string
     */
    protected $name;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the snapshot was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * An array of the regions that the snapshot is available in. The regions are represented by their identifying slug values.
     *
     * @var list<string>
     */
    protected $regions;
    /**
     * The minimum size in GB required for a volume or Droplet to use this snapshot.
     *
     * @var int
     */
    protected $minDiskSize;
    /**
     * The billable size of the snapshot in gigabytes.
     *
     * @var float
     */
    protected $sizeGigabytes;
    /**
     * The unique identifier for the resource that the snapshot originated from.
     *
     * @var string
     */
    protected $resourceId;
    /**
     * The type of resource that the snapshot originated from.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * An array of Tags the snapshot has been tagged with.<br><br>Requires `tag:read` scope.
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * The unique identifier for the snapshot.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique identifier for the snapshot.
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
     * A human-readable name for the snapshot.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-readable name for the snapshot.
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
     * A time value given in ISO8601 combined date and time format that represents when the snapshot was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the snapshot was created.
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
     * An array of the regions that the snapshot is available in. The regions are represented by their identifying slug values.
     *
     * @return list<string>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * An array of the regions that the snapshot is available in. The regions are represented by their identifying slug values.
     *
     * @param list<string> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
    /**
     * The minimum size in GB required for a volume or Droplet to use this snapshot.
     *
     * @return int
     */
    public function getMinDiskSize(): int
    {
        return $this->minDiskSize;
    }
    /**
     * The minimum size in GB required for a volume or Droplet to use this snapshot.
     *
     * @param int $minDiskSize
     *
     * @return self
     */
    public function setMinDiskSize(int $minDiskSize): self
    {
        $this->initialized['minDiskSize'] = true;
        $this->minDiskSize = $minDiskSize;
        return $this;
    }
    /**
     * The billable size of the snapshot in gigabytes.
     *
     * @return float
     */
    public function getSizeGigabytes(): float
    {
        return $this->sizeGigabytes;
    }
    /**
     * The billable size of the snapshot in gigabytes.
     *
     * @param float $sizeGigabytes
     *
     * @return self
     */
    public function setSizeGigabytes(float $sizeGigabytes): self
    {
        $this->initialized['sizeGigabytes'] = true;
        $this->sizeGigabytes = $sizeGigabytes;
        return $this;
    }
    /**
     * The unique identifier for the resource that the snapshot originated from.
     *
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }
    /**
     * The unique identifier for the resource that the snapshot originated from.
     *
     * @param string $resourceId
     *
     * @return self
     */
    public function setResourceId(string $resourceId): self
    {
        $this->initialized['resourceId'] = true;
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * The type of resource that the snapshot originated from.
     *
     * @return string
     */
    public function getResourceType(): string
    {
        return $this->resourceType;
    }
    /**
     * The type of resource that the snapshot originated from.
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType): self
    {
        $this->initialized['resourceType'] = true;
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * An array of Tags the snapshot has been tagged with.<br><br>Requires `tag:read` scope.
     *
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * An array of Tags the snapshot has been tagged with.<br><br>Requires `tag:read` scope.
     *
     * @param list<string>|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
}