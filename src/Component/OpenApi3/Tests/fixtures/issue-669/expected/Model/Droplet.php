<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Droplet implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
     *
     * @var int
     */
    public int $id;
    /**
     * The human-readable name set for the Droplet instance.
     *
     * @var string
     */
    public string $name;
    /**
     * Memory of the Droplet in megabytes.
     *
     * @var int
     */
    public int $memory;
    /**
     * The number of virtual CPUs.
     *
     * @var int
     */
    public int $vcpus;
    /**
     * The size of the Droplet's disk in gigabytes.
     *
     * @var int
     */
    public int $disk;
    /**
     * An array of objects containing information about the disks available to the Droplet.
     *
     * @var list<DiskInfo>
     */
    public array $diskInfo;
    /**
     * A boolean value indicating whether the Droplet has been locked, preventing actions by users.
     *
     * @var bool
     */
    public bool $locked;
    /**
     * A status string indicating the state of the Droplet instance. This may be "new", "active", "off", or "archive".
     *
     * @var string
     */
    public string $status;
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
    public ?Kernel $kernel;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Droplet was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * An array of features enabled on this Droplet.
     *
     * @var list<string>
     */
    public array $features;
    /**
     * An array of backup IDs of any backups that have been taken of the Droplet instance.  Droplet backups are enabled at the time of the instance creation.<br>Requires `image:read` scope.
     *
     * @var list<int>
     */
    public array $backupIds;
    /**
     * @var DropletNextBackupWindow
     */
    public DropletNextBackupWindow $nextBackupWindow;
    /**
     * An array of snapshot IDs of any snapshots created from the Droplet instance.<br>Requires `image:read` scope.
     *
     * @var list<int>
     */
    public array $snapshotIds;
    /**
     * @var DropletImage
     */
    public DropletImage $image;
    /**
     * A flat array including the unique identifier for each Block Storage volume attached to the Droplet.<br>Requires `block_storage:read` scope.
     *
     * @var list<string>
     */
    public array $volumeIds;
    /**
     * @var Size
     */
    public Size $size;
    /**
     * The unique slug identifier for the size of this Droplet.
     *
     * @var string
     */
    public string $sizeSlug;
    /**
     * The details of the network that are configured for the Droplet instance.  This is an object that contains keys for IPv4 and IPv6. The value of each of these is an array that contains objects describing an individual IP resource allocated to the Droplet. These will define attributes like the IP address, netmask, and gateway of the specific network depending on the type of network it is.
     *
     * @var DropletNetworks
     */
    public DropletNetworks $networks;
    /**
     * @var Region
     */
    public Region $region;
    /**
     * An array of Tags the Droplet has been tagged with.<br>Requires `tag:read` scope.
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * A string specifying the UUID of the VPC to which the Droplet is assigned.<br>Requires `vpc:read` scope.
     *
     * @var string
     */
    public string $vpcUuid;
    /**
     * An object containing information about the GPU capabilities of Droplets created with this size.
     *
     * @var GpuInfo
     */
    public GpuInfo $gpuInfo;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'memory' => 'memory', 'vcpus' => 'vcpus', 'disk' => 'disk', 'diskInfo' => 'disk_info', 'locked' => 'locked', 'status' => 'status', 'kernel' => 'kernel', 'createdAt' => 'created_at', 'features' => 'features', 'backupIds' => 'backup_ids', 'nextBackupWindow' => 'next_backup_window', 'snapshotIds' => 'snapshot_ids', 'image' => 'image', 'volumeIds' => 'volume_ids', 'size' => 'size', 'sizeSlug' => 'size_slug', 'networks' => 'networks', 'region' => 'region', 'tags' => 'tags', 'vpcUuid' => 'vpc_uuid', 'gpuInfo' => 'gpu_info'];
    }
}