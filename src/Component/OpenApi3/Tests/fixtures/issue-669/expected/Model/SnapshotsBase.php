<?php

namespace Jane\Generated\DigitalOcean\Model;

class SnapshotsBase extends \ArrayObject
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
}