<?php

namespace Jane\Generated\DigitalOcean\Model;

class DropletSnapshot extends \ArrayObject
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
     * The unique identifier for the snapshot or backup.
     *
     * @var int
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
     * Describes the kind of image. It may be one of `snapshot` or `backup`. This specifies whether an image is a user-generated Droplet snapshot or automatically created Droplet backup.
     *
     * @var string
     */
    protected $type;
    /**
     * The unique identifier for the snapshot or backup.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The unique identifier for the snapshot or backup.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
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
     * Describes the kind of image. It may be one of `snapshot` or `backup`. This specifies whether an image is a user-generated Droplet snapshot or automatically created Droplet backup.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Describes the kind of image. It may be one of `snapshot` or `backup`. This specifies whether an image is a user-generated Droplet snapshot or automatically created Droplet backup.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}