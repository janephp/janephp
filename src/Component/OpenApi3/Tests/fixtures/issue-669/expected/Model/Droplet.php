<?php

namespace Jane\Generated\DigitalOcean\Model;

class Droplet extends \ArrayObject
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
     * A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
     *
     * @var int
     */
    protected $id;
    /**
     * The human-readable name set for the Droplet instance.
     *
     * @var string
     */
    protected $name;
    /**
     * Memory of the Droplet in megabytes.
     *
     * @var int
     */
    protected $memory;
    /**
     * The number of virtual CPUs.
     *
     * @var int
     */
    protected $vcpus;
    /**
     * The size of the Droplet's disk in gigabytes.
     *
     * @var int
     */
    protected $disk;
    /**
     * An array of objects containing information about the disks available to the Droplet.
     *
     * @var list<DiskInfo>
     */
    protected $diskInfo;
    /**
     * A boolean value indicating whether the Droplet has been locked, preventing actions by users.
     *
     * @var bool
     */
    protected $locked;
    /**
     * A status string indicating the state of the Droplet instance. This may be "new", "active", "off", or "archive".
     *
     * @var string
     */
    protected $status;
    /**
     * **Note**: All Droplets created after March 2017 use internal kernels by default.
     * These Droplets will have this attribute set to `null`.
     * 
     * The current [kernel](https://docs.digitalocean.com/products/droplets/how-to/kernel/)
     * for Droplets with externally managed kernels. This will initially be set to
     * the kernel of the base image when the Droplet is created.
     * 
     *
     * @deprecated
     *
     * @var Kernel|null
     */
    protected $kernel;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Droplet was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * An array of features enabled on this Droplet.
     *
     * @var list<string>
     */
    protected $features;
    /**
     * An array of backup IDs of any backups that have been taken of the Droplet instance.  Droplet backups are enabled at the time of the instance creation.<br>Requires `image:read` scope.
     *
     * @var list<int>
     */
    protected $backupIds;
    /**
     * @var DropletNextBackupWindow
     */
    protected $nextBackupWindow;
    /**
     * An array of snapshot IDs of any snapshots created from the Droplet instance.<br>Requires `image:read` scope.
     *
     * @var list<int>
     */
    protected $snapshotIds;
    /**
     * @var DropletImage
     */
    protected $image;
    /**
     * A flat array including the unique identifier for each Block Storage volume attached to the Droplet.<br>Requires `block_storage:read` scope.
     *
     * @var list<string>
     */
    protected $volumeIds;
    /**
     * @var Size
     */
    protected $size;
    /**
     * The unique slug identifier for the size of this Droplet.
     *
     * @var string
     */
    protected $sizeSlug;
    /**
     * The details of the network that are configured for the Droplet instance.  This is an object that contains keys for IPv4 and IPv6. The value of each of these is an array that contains objects describing an individual IP resource allocated to the Droplet. These will define attributes like the IP address, netmask, and gateway of the specific network depending on the type of network it is.
     *
     * @var DropletNetworks
     */
    protected $networks;
    /**
     * @var Region
     */
    protected $region;
    /**
     * An array of Tags the Droplet has been tagged with.<br>Requires `tag:read` scope.
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * A string specifying the UUID of the VPC to which the Droplet is assigned.<br>Requires `vpc:read` scope.
     *
     * @var string
     */
    protected $vpcUuid;
    /**
     * An object containing information about the GPU capabilities of Droplets created with this size.
     *
     * @var GpuInfo
     */
    protected $gpuInfo;
    /**
     * A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
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
     * The human-readable name set for the Droplet instance.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name set for the Droplet instance.
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
     * Memory of the Droplet in megabytes.
     *
     * @return int
     */
    public function getMemory(): int
    {
        return $this->memory;
    }
    /**
     * Memory of the Droplet in megabytes.
     *
     * @param int $memory
     *
     * @return self
     */
    public function setMemory(int $memory): self
    {
        $this->initialized['memory'] = true;
        $this->memory = $memory;
        return $this;
    }
    /**
     * The number of virtual CPUs.
     *
     * @return int
     */
    public function getVcpus(): int
    {
        return $this->vcpus;
    }
    /**
     * The number of virtual CPUs.
     *
     * @param int $vcpus
     *
     * @return self
     */
    public function setVcpus(int $vcpus): self
    {
        $this->initialized['vcpus'] = true;
        $this->vcpus = $vcpus;
        return $this;
    }
    /**
     * The size of the Droplet's disk in gigabytes.
     *
     * @return int
     */
    public function getDisk(): int
    {
        return $this->disk;
    }
    /**
     * The size of the Droplet's disk in gigabytes.
     *
     * @param int $disk
     *
     * @return self
     */
    public function setDisk(int $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;
        return $this;
    }
    /**
     * An array of objects containing information about the disks available to the Droplet.
     *
     * @return list<DiskInfo>
     */
    public function getDiskInfo(): array
    {
        return $this->diskInfo;
    }
    /**
     * An array of objects containing information about the disks available to the Droplet.
     *
     * @param list<DiskInfo> $diskInfo
     *
     * @return self
     */
    public function setDiskInfo(array $diskInfo): self
    {
        $this->initialized['diskInfo'] = true;
        $this->diskInfo = $diskInfo;
        return $this;
    }
    /**
     * A boolean value indicating whether the Droplet has been locked, preventing actions by users.
     *
     * @return bool
     */
    public function getLocked(): bool
    {
        return $this->locked;
    }
    /**
     * A boolean value indicating whether the Droplet has been locked, preventing actions by users.
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked(bool $locked): self
    {
        $this->initialized['locked'] = true;
        $this->locked = $locked;
        return $this;
    }
    /**
     * A status string indicating the state of the Droplet instance. This may be "new", "active", "off", or "archive".
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * A status string indicating the state of the Droplet instance. This may be "new", "active", "off", or "archive".
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
     * **Note**: All Droplets created after March 2017 use internal kernels by default.
     * These Droplets will have this attribute set to `null`.
     * 
     * The current [kernel](https://docs.digitalocean.com/products/droplets/how-to/kernel/)
     * for Droplets with externally managed kernels. This will initially be set to
     * the kernel of the base image when the Droplet is created.
     * 
     *
     * @deprecated
     *
     * @return Kernel|null
     */
    public function getKernel(): ?Kernel
    {
        return $this->kernel;
    }
    /**
    * **Note**: All Droplets created after March 2017 use internal kernels by default.
    These Droplets will have this attribute set to `null`.
    
    The current [kernel](https://docs.digitalocean.com/products/droplets/how-to/kernel/)
    for Droplets with externally managed kernels. This will initially be set to
    the kernel of the base image when the Droplet is created.
    
    *
    * @param Kernel|null $kernel
    *
    * @deprecated
    *
    * @return self
    */
    public function setKernel(?Kernel $kernel): self
    {
        $this->initialized['kernel'] = true;
        $this->kernel = $kernel;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Droplet was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Droplet was created.
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
     * An array of features enabled on this Droplet.
     *
     * @return list<string>
     */
    public function getFeatures(): array
    {
        return $this->features;
    }
    /**
     * An array of features enabled on this Droplet.
     *
     * @param list<string> $features
     *
     * @return self
     */
    public function setFeatures(array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
    /**
     * An array of backup IDs of any backups that have been taken of the Droplet instance.  Droplet backups are enabled at the time of the instance creation.<br>Requires `image:read` scope.
     *
     * @return list<int>
     */
    public function getBackupIds(): array
    {
        return $this->backupIds;
    }
    /**
     * An array of backup IDs of any backups that have been taken of the Droplet instance.  Droplet backups are enabled at the time of the instance creation.<br>Requires `image:read` scope.
     *
     * @param list<int> $backupIds
     *
     * @return self
     */
    public function setBackupIds(array $backupIds): self
    {
        $this->initialized['backupIds'] = true;
        $this->backupIds = $backupIds;
        return $this;
    }
    /**
     * @return DropletNextBackupWindow
     */
    public function getNextBackupWindow(): DropletNextBackupWindow
    {
        return $this->nextBackupWindow;
    }
    /**
     * @param DropletNextBackupWindow $nextBackupWindow
     *
     * @return self
     */
    public function setNextBackupWindow(DropletNextBackupWindow $nextBackupWindow): self
    {
        $this->initialized['nextBackupWindow'] = true;
        $this->nextBackupWindow = $nextBackupWindow;
        return $this;
    }
    /**
     * An array of snapshot IDs of any snapshots created from the Droplet instance.<br>Requires `image:read` scope.
     *
     * @return list<int>
     */
    public function getSnapshotIds(): array
    {
        return $this->snapshotIds;
    }
    /**
     * An array of snapshot IDs of any snapshots created from the Droplet instance.<br>Requires `image:read` scope.
     *
     * @param list<int> $snapshotIds
     *
     * @return self
     */
    public function setSnapshotIds(array $snapshotIds): self
    {
        $this->initialized['snapshotIds'] = true;
        $this->snapshotIds = $snapshotIds;
        return $this;
    }
    /**
     * @return DropletImage
     */
    public function getImage(): DropletImage
    {
        return $this->image;
    }
    /**
     * @param DropletImage $image
     *
     * @return self
     */
    public function setImage(DropletImage $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * A flat array including the unique identifier for each Block Storage volume attached to the Droplet.<br>Requires `block_storage:read` scope.
     *
     * @return list<string>
     */
    public function getVolumeIds(): array
    {
        return $this->volumeIds;
    }
    /**
     * A flat array including the unique identifier for each Block Storage volume attached to the Droplet.<br>Requires `block_storage:read` scope.
     *
     * @param list<string> $volumeIds
     *
     * @return self
     */
    public function setVolumeIds(array $volumeIds): self
    {
        $this->initialized['volumeIds'] = true;
        $this->volumeIds = $volumeIds;
        return $this;
    }
    /**
     * @return Size
     */
    public function getSize(): Size
    {
        return $this->size;
    }
    /**
     * @param Size $size
     *
     * @return self
     */
    public function setSize(Size $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The unique slug identifier for the size of this Droplet.
     *
     * @return string
     */
    public function getSizeSlug(): string
    {
        return $this->sizeSlug;
    }
    /**
     * The unique slug identifier for the size of this Droplet.
     *
     * @param string $sizeSlug
     *
     * @return self
     */
    public function setSizeSlug(string $sizeSlug): self
    {
        $this->initialized['sizeSlug'] = true;
        $this->sizeSlug = $sizeSlug;
        return $this;
    }
    /**
     * The details of the network that are configured for the Droplet instance.  This is an object that contains keys for IPv4 and IPv6. The value of each of these is an array that contains objects describing an individual IP resource allocated to the Droplet. These will define attributes like the IP address, netmask, and gateway of the specific network depending on the type of network it is.
     *
     * @return DropletNetworks
     */
    public function getNetworks(): DropletNetworks
    {
        return $this->networks;
    }
    /**
     * The details of the network that are configured for the Droplet instance.  This is an object that contains keys for IPv4 and IPv6. The value of each of these is an array that contains objects describing an individual IP resource allocated to the Droplet. These will define attributes like the IP address, netmask, and gateway of the specific network depending on the type of network it is.
     *
     * @param DropletNetworks $networks
     *
     * @return self
     */
    public function setNetworks(DropletNetworks $networks): self
    {
        $this->initialized['networks'] = true;
        $this->networks = $networks;
        return $this;
    }
    /**
     * @return Region
     */
    public function getRegion(): Region
    {
        return $this->region;
    }
    /**
     * @param Region $region
     *
     * @return self
     */
    public function setRegion(Region $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * An array of Tags the Droplet has been tagged with.<br>Requires `tag:read` scope.
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * An array of Tags the Droplet has been tagged with.<br>Requires `tag:read` scope.
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * A string specifying the UUID of the VPC to which the Droplet is assigned.<br>Requires `vpc:read` scope.
     *
     * @return string
     */
    public function getVpcUuid(): string
    {
        return $this->vpcUuid;
    }
    /**
     * A string specifying the UUID of the VPC to which the Droplet is assigned.<br>Requires `vpc:read` scope.
     *
     * @param string $vpcUuid
     *
     * @return self
     */
    public function setVpcUuid(string $vpcUuid): self
    {
        $this->initialized['vpcUuid'] = true;
        $this->vpcUuid = $vpcUuid;
        return $this;
    }
    /**
     * An object containing information about the GPU capabilities of Droplets created with this size.
     *
     * @return GpuInfo
     */
    public function getGpuInfo(): GpuInfo
    {
        return $this->gpuInfo;
    }
    /**
     * An object containing information about the GPU capabilities of Droplets created with this size.
     *
     * @param GpuInfo $gpuInfo
     *
     * @return self
     */
    public function setGpuInfo(GpuInfo $gpuInfo): self
    {
        $this->initialized['gpuInfo'] = true;
        $this->gpuInfo = $gpuInfo;
        return $this;
    }
}