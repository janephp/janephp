<?php

namespace Jane\Generated\DigitalOcean\Model;

class DropletCreate extends \ArrayObject
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
     * The slug identifier for the region that you wish to deploy the Droplet in. If the specific datacenter is not not important, a slug prefix (e.g. `nyc`) can be used to deploy the Droplet in any of the that region's locations (`nyc1`, `nyc2`, or `nyc3`). If the region is omitted from the create request completely, the Droplet may deploy in any region.
     *
     * @var string
     */
    protected $region;
    /**
     * The slug identifier for the size that you wish to select for this Droplet.
     *
     * @var string
     */
    protected $size;
    /**
     * The image ID of a public or private image or the slug identifier for a public image. This image will be the base image for your Droplet.<br>Requires `image:read` scope.
     *
     * @var mixed
     */
    protected $image;
    /**
     * An array containing the IDs or fingerprints of the SSH keys that you wish to embed in the Droplet's root account upon creation. You must add the keys to your team before they can be embedded on a Droplet.<br>Requires `ssh_key:read` scope.
     *
     * @var list<mixed>
     */
    protected $sshKeys = array();
    /**
     * A boolean indicating whether automated backups should be enabled for the Droplet.
     *
     * @var bool
     */
    protected $backups = false;
    /**
     * @var DropletCreateBackupPolicy
     */
    protected $backupPolicy;
    /**
     * A boolean indicating whether to enable IPv6 on the Droplet.
     *
     * @var bool
     */
    protected $ipv6 = false;
    /**
     * A boolean indicating whether to install the DigitalOcean agent for monitoring.
     *
     * @var bool
     */
    protected $monitoring = false;
    /**
     * A flat array of tag names as strings to apply to the Droplet after it is created. Tag names can either be existing or new tags.<br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    protected $tags = array();
    /**
     * A string containing 'user data' which may be used to configure the Droplet on first boot, often a 'cloud-config' file or Bash script. It must be plain text and may not exceed 64 KiB in size.
     *
     * @var string
     */
    protected $userData;
    /**
     * This parameter has been deprecated. Use `vpc_uuid` instead to specify a VPC network for the Droplet. If no `vpc_uuid` is provided, the Droplet will be placed in your account's default VPC for the region.
     *
     * @deprecated
     *
     * @var bool
     */
    protected $privateNetworking = false;
    /**
     * An array of IDs for block storage volumes that will be attached to the Droplet once created. The volumes must not already be attached to an existing Droplet.<br>Requires `block_storage:read` scpoe.
     *
     * @var list<string>
     */
    protected $volumes = array();
    /**
     * A string specifying the UUID of the VPC to which the Droplet will be assigned. If excluded, the Droplet will be assigned to your account's default VPC for the region.<br>Requires `vpc:read` scope.
     *
     * @var string
     */
    protected $vpcUuid;
    /**
     * A boolean indicating whether to install the DigitalOcean agent used for providing access to the Droplet web console in the control panel. By default, the agent is installed on new Droplets but installation errors (i.e. OS not supported) are ignored. To prevent it from being installed, set to `false`. To make installation errors fatal, explicitly set it to `true`.
     *
     * @var bool
     */
    protected $withDropletAgent;
    /**
     * The slug identifier for the region that you wish to deploy the Droplet in. If the specific datacenter is not not important, a slug prefix (e.g. `nyc`) can be used to deploy the Droplet in any of the that region's locations (`nyc1`, `nyc2`, or `nyc3`). If the region is omitted from the create request completely, the Droplet may deploy in any region.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug identifier for the region that you wish to deploy the Droplet in. If the specific datacenter is not not important, a slug prefix (e.g. `nyc`) can be used to deploy the Droplet in any of the that region's locations (`nyc1`, `nyc2`, or `nyc3`). If the region is omitted from the create request completely, the Droplet may deploy in any region.
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
     * The slug identifier for the size that you wish to select for this Droplet.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
     * The slug identifier for the size that you wish to select for this Droplet.
     *
     * @param string $size
     *
     * @return self
     */
    public function setSize(string $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The image ID of a public or private image or the slug identifier for a public image. This image will be the base image for your Droplet.<br>Requires `image:read` scope.
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * The image ID of a public or private image or the slug identifier for a public image. This image will be the base image for your Droplet.<br>Requires `image:read` scope.
     *
     * @param mixed $image
     *
     * @return self
     */
    public function setImage($image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * An array containing the IDs or fingerprints of the SSH keys that you wish to embed in the Droplet's root account upon creation. You must add the keys to your team before they can be embedded on a Droplet.<br>Requires `ssh_key:read` scope.
     *
     * @return list<mixed>
     */
    public function getSshKeys(): array
    {
        return $this->sshKeys;
    }
    /**
     * An array containing the IDs or fingerprints of the SSH keys that you wish to embed in the Droplet's root account upon creation. You must add the keys to your team before they can be embedded on a Droplet.<br>Requires `ssh_key:read` scope.
     *
     * @param list<mixed> $sshKeys
     *
     * @return self
     */
    public function setSshKeys(array $sshKeys): self
    {
        $this->initialized['sshKeys'] = true;
        $this->sshKeys = $sshKeys;
        return $this;
    }
    /**
     * A boolean indicating whether automated backups should be enabled for the Droplet.
     *
     * @return bool
     */
    public function getBackups(): bool
    {
        return $this->backups;
    }
    /**
     * A boolean indicating whether automated backups should be enabled for the Droplet.
     *
     * @param bool $backups
     *
     * @return self
     */
    public function setBackups(bool $backups): self
    {
        $this->initialized['backups'] = true;
        $this->backups = $backups;
        return $this;
    }
    /**
     * @return DropletCreateBackupPolicy
     */
    public function getBackupPolicy(): DropletCreateBackupPolicy
    {
        return $this->backupPolicy;
    }
    /**
     * @param DropletCreateBackupPolicy $backupPolicy
     *
     * @return self
     */
    public function setBackupPolicy(DropletCreateBackupPolicy $backupPolicy): self
    {
        $this->initialized['backupPolicy'] = true;
        $this->backupPolicy = $backupPolicy;
        return $this;
    }
    /**
     * A boolean indicating whether to enable IPv6 on the Droplet.
     *
     * @return bool
     */
    public function getIpv6(): bool
    {
        return $this->ipv6;
    }
    /**
     * A boolean indicating whether to enable IPv6 on the Droplet.
     *
     * @param bool $ipv6
     *
     * @return self
     */
    public function setIpv6(bool $ipv6): self
    {
        $this->initialized['ipv6'] = true;
        $this->ipv6 = $ipv6;
        return $this;
    }
    /**
     * A boolean indicating whether to install the DigitalOcean agent for monitoring.
     *
     * @return bool
     */
    public function getMonitoring(): bool
    {
        return $this->monitoring;
    }
    /**
     * A boolean indicating whether to install the DigitalOcean agent for monitoring.
     *
     * @param bool $monitoring
     *
     * @return self
     */
    public function setMonitoring(bool $monitoring): self
    {
        $this->initialized['monitoring'] = true;
        $this->monitoring = $monitoring;
        return $this;
    }
    /**
     * A flat array of tag names as strings to apply to the Droplet after it is created. Tag names can either be existing or new tags.<br>Requires `tag:create` scope.
     *
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * A flat array of tag names as strings to apply to the Droplet after it is created. Tag names can either be existing or new tags.<br>Requires `tag:create` scope.
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
     * A string containing 'user data' which may be used to configure the Droplet on first boot, often a 'cloud-config' file or Bash script. It must be plain text and may not exceed 64 KiB in size.
     *
     * @return string
     */
    public function getUserData(): string
    {
        return $this->userData;
    }
    /**
     * A string containing 'user data' which may be used to configure the Droplet on first boot, often a 'cloud-config' file or Bash script. It must be plain text and may not exceed 64 KiB in size.
     *
     * @param string $userData
     *
     * @return self
     */
    public function setUserData(string $userData): self
    {
        $this->initialized['userData'] = true;
        $this->userData = $userData;
        return $this;
    }
    /**
     * This parameter has been deprecated. Use `vpc_uuid` instead to specify a VPC network for the Droplet. If no `vpc_uuid` is provided, the Droplet will be placed in your account's default VPC for the region.
     *
     * @deprecated
     *
     * @return bool
     */
    public function getPrivateNetworking(): bool
    {
        return $this->privateNetworking;
    }
    /**
     * This parameter has been deprecated. Use `vpc_uuid` instead to specify a VPC network for the Droplet. If no `vpc_uuid` is provided, the Droplet will be placed in your account's default VPC for the region.
     *
     * @param bool $privateNetworking
     *
     * @deprecated
     *
     * @return self
     */
    public function setPrivateNetworking(bool $privateNetworking): self
    {
        $this->initialized['privateNetworking'] = true;
        $this->privateNetworking = $privateNetworking;
        return $this;
    }
    /**
     * An array of IDs for block storage volumes that will be attached to the Droplet once created. The volumes must not already be attached to an existing Droplet.<br>Requires `block_storage:read` scpoe.
     *
     * @return list<string>
     */
    public function getVolumes(): array
    {
        return $this->volumes;
    }
    /**
     * An array of IDs for block storage volumes that will be attached to the Droplet once created. The volumes must not already be attached to an existing Droplet.<br>Requires `block_storage:read` scpoe.
     *
     * @param list<string> $volumes
     *
     * @return self
     */
    public function setVolumes(array $volumes): self
    {
        $this->initialized['volumes'] = true;
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * A string specifying the UUID of the VPC to which the Droplet will be assigned. If excluded, the Droplet will be assigned to your account's default VPC for the region.<br>Requires `vpc:read` scope.
     *
     * @return string
     */
    public function getVpcUuid(): string
    {
        return $this->vpcUuid;
    }
    /**
     * A string specifying the UUID of the VPC to which the Droplet will be assigned. If excluded, the Droplet will be assigned to your account's default VPC for the region.<br>Requires `vpc:read` scope.
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
     * A boolean indicating whether to install the DigitalOcean agent used for providing access to the Droplet web console in the control panel. By default, the agent is installed on new Droplets but installation errors (i.e. OS not supported) are ignored. To prevent it from being installed, set to `false`. To make installation errors fatal, explicitly set it to `true`.
     *
     * @return bool
     */
    public function getWithDropletAgent(): bool
    {
        return $this->withDropletAgent;
    }
    /**
     * A boolean indicating whether to install the DigitalOcean agent used for providing access to the Droplet web console in the control panel. By default, the agent is installed on new Droplets but installation errors (i.e. OS not supported) are ignored. To prevent it from being installed, set to `false`. To make installation errors fatal, explicitly set it to `true`.
     *
     * @param bool $withDropletAgent
     *
     * @return self
     */
    public function setWithDropletAgent(bool $withDropletAgent): self
    {
        $this->initialized['withDropletAgent'] = true;
        $this->withDropletAgent = $withDropletAgent;
        return $this;
    }
}