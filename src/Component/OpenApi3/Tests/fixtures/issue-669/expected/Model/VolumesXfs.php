<?php

namespace Jane\Generated\DigitalOcean\Model;

class VolumesXfs extends \ArrayObject
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
     * The unique identifier for the block storage volume.
     *
     * @var string
     */
    protected $id;
    /**
     * An array containing the IDs of the Droplets the volume is attached to. Note that at this time, a volume can only be attached to a single Droplet.
     *
     * @var list<int>|null
     */
    protected $dropletIds;
    /**
     * A human-readable name for the block storage volume. Must be lowercase and be composed only of numbers, letters and "-", up to a limit of 64 characters. The name must begin with a letter.
     *
     * @var string
     */
    protected $name;
    /**
     * An optional free-form text field to describe a block storage volume.
     *
     * @var string
     */
    protected $description;
    /**
     * The size of the block storage volume in GiB (1024^3). This field does not apply  when creating a volume from a snapshot.
     *
     * @var int
     */
    protected $sizeGigabytes;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the block storage volume was created.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * The unique identifier for the volume snapshot from which to create the volume.
     *
     * @var string
     */
    protected $snapshotId;
    /**
     * The name of the filesystem type to be used on the volume. When provided, the volume will automatically be formatted to the specified filesystem type. Currently, the available options are `ext4` and `xfs`. Pre-formatted volumes are automatically mounted when attached to Ubuntu, Debian, Fedora, Fedora Atomic, and CentOS Droplets created on or after April 26, 2018. Attaching pre-formatted volumes to other Droplets is not recommended.
     *
     * @var string
     */
    protected $filesystemType;
    /**
     * The slug identifier for the region where the resource will initially be available.
     *
     * @var string
     */
    protected $region;
    /**
     * @var string
     */
    protected $filesystemLabel;
    /**
     * The unique identifier for the block storage volume.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique identifier for the block storage volume.
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
     * An array containing the IDs of the Droplets the volume is attached to. Note that at this time, a volume can only be attached to a single Droplet.
     *
     * @return list<int>|null
     */
    public function getDropletIds(): ?array
    {
        return $this->dropletIds;
    }
    /**
     * An array containing the IDs of the Droplets the volume is attached to. Note that at this time, a volume can only be attached to a single Droplet.
     *
     * @param list<int>|null $dropletIds
     *
     * @return self
     */
    public function setDropletIds(?array $dropletIds): self
    {
        $this->initialized['dropletIds'] = true;
        $this->dropletIds = $dropletIds;
        return $this;
    }
    /**
     * A human-readable name for the block storage volume. Must be lowercase and be composed only of numbers, letters and "-", up to a limit of 64 characters. The name must begin with a letter.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-readable name for the block storage volume. Must be lowercase and be composed only of numbers, letters and "-", up to a limit of 64 characters. The name must begin with a letter.
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
     * An optional free-form text field to describe a block storage volume.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * An optional free-form text field to describe a block storage volume.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The size of the block storage volume in GiB (1024^3). This field does not apply  when creating a volume from a snapshot.
     *
     * @return int
     */
    public function getSizeGigabytes(): int
    {
        return $this->sizeGigabytes;
    }
    /**
     * The size of the block storage volume in GiB (1024^3). This field does not apply  when creating a volume from a snapshot.
     *
     * @param int $sizeGigabytes
     *
     * @return self
     */
    public function setSizeGigabytes(int $sizeGigabytes): self
    {
        $this->initialized['sizeGigabytes'] = true;
        $this->sizeGigabytes = $sizeGigabytes;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the block storage volume was created.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the block storage volume was created.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
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
    /**
     * The unique identifier for the volume snapshot from which to create the volume.
     *
     * @return string
     */
    public function getSnapshotId(): string
    {
        return $this->snapshotId;
    }
    /**
     * The unique identifier for the volume snapshot from which to create the volume.
     *
     * @param string $snapshotId
     *
     * @return self
     */
    public function setSnapshotId(string $snapshotId): self
    {
        $this->initialized['snapshotId'] = true;
        $this->snapshotId = $snapshotId;
        return $this;
    }
    /**
     * The name of the filesystem type to be used on the volume. When provided, the volume will automatically be formatted to the specified filesystem type. Currently, the available options are `ext4` and `xfs`. Pre-formatted volumes are automatically mounted when attached to Ubuntu, Debian, Fedora, Fedora Atomic, and CentOS Droplets created on or after April 26, 2018. Attaching pre-formatted volumes to other Droplets is not recommended.
     *
     * @return string
     */
    public function getFilesystemType(): string
    {
        return $this->filesystemType;
    }
    /**
     * The name of the filesystem type to be used on the volume. When provided, the volume will automatically be formatted to the specified filesystem type. Currently, the available options are `ext4` and `xfs`. Pre-formatted volumes are automatically mounted when attached to Ubuntu, Debian, Fedora, Fedora Atomic, and CentOS Droplets created on or after April 26, 2018. Attaching pre-formatted volumes to other Droplets is not recommended.
     *
     * @param string $filesystemType
     *
     * @return self
     */
    public function setFilesystemType(string $filesystemType): self
    {
        $this->initialized['filesystemType'] = true;
        $this->filesystemType = $filesystemType;
        return $this;
    }
    /**
     * The slug identifier for the region where the resource will initially be available.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug identifier for the region where the resource will initially be available.
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
     * @return string
     */
    public function getFilesystemLabel(): string
    {
        return $this->filesystemLabel;
    }
    /**
     * @param string $filesystemLabel
     *
     * @return self
     */
    public function setFilesystemLabel(string $filesystemLabel): self
    {
        $this->initialized['filesystemLabel'] = true;
        $this->filesystemLabel = $filesystemLabel;
        return $this;
    }
}