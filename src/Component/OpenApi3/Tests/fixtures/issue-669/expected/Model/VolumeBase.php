<?php

namespace Jane\Generated\DigitalOcean\Model;

class VolumeBase extends \ArrayObject
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
}