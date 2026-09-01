<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletSingleCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The human-readable string you wish to use when displaying the Droplet name. The name, if set to a domain name managed in the DigitalOcean DNS management system, will configure a PTR record for the Droplet. The name set during creation will also determine the hostname for the Droplet in its internal configuration.
     *
     * @var string
     */
    public string $name;
    /**
     * The slug identifier for the region that you wish to deploy the Droplet in. If the specific datacenter is not not important, a slug prefix (e.g. `nyc`) can be used to deploy the Droplet in any of the that region's locations (`nyc1`, `nyc2`, or `nyc3`). If the region is omitted from the create request completely, the Droplet may deploy in any region.
     *
     * @var string
     */
    public string $region;
    /**
     * The slug identifier for the size that you wish to select for this Droplet.
     *
     * @var string
     */
    public string $size;
    /**
     * The image ID of a public or private image or the slug identifier for a public image. This image will be the base image for your Droplet.<br>Requires `image:read` scope.
     *
     * @var string|int
     */
    public $image;
    /**
     * An array containing the IDs or fingerprints of the SSH keys that you wish to embed in the Droplet's root account upon creation. You must add the keys to your team before they can be embedded on a Droplet.<br>Requires `ssh_key:read` scope.
     *
     * @var list<string>|list<int>
     */
    public array $sshKeys = array();
    /**
     * A boolean indicating whether automated backups should be enabled for the Droplet.
     *
     * @var bool
     */
    public bool $backups = false;
    /**
     * @var DropletCreateBackupPolicy
     */
    public DropletCreateBackupPolicy $backupPolicy;
    /**
     * A boolean indicating whether to enable IPv6 on the Droplet.
     *
     * @var bool
     */
    public bool $ipv6 = false;
    /**
     * A boolean indicating whether to install the DigitalOcean agent for monitoring.
     *
     * @var bool
     */
    public bool $monitoring = false;
    /**
     * A flat array of tag names as strings to apply to the Droplet after it is created. Tag names can either be existing or new tags.<br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    public ?array $tags = array();
    /**
     * A string containing 'user data' which may be used to configure the Droplet on first boot, often a 'cloud-config' file or Bash script. It must be plain text and may not exceed 64 KiB in size.
     *
     * @var string
     */
    public string $userData;
    /**
     * This parameter has been deprecated. Use `vpc_uuid` instead to specify a VPC network for the Droplet. If no `vpc_uuid` is provided, the Droplet will be placed in your account's default VPC for the region.
     *
     * @deprecated
     *
     * @var bool
     */
    public bool $privateNetworking = false;
    /**
     * An array of IDs for block storage volumes that will be attached to the Droplet once created. The volumes must not already be attached to an existing Droplet.<br>Requires `block_storage:read` scpoe.
     *
     * @var list<string>
     */
    public array $volumes = array();
    /**
     * A string specifying the UUID of the VPC to which the Droplet will be assigned. If excluded, the Droplet will be assigned to your account's default VPC for the region.<br>Requires `vpc:read` scope.
     *
     * @var string
     */
    public string $vpcUuid;
    /**
     * A boolean indicating whether to install the DigitalOcean agent used for providing access to the Droplet web console in the control panel. By default, the agent is installed on new Droplets but installation errors (i.e. OS not supported) are ignored. To prevent it from being installed, set to `false`. To make installation errors fatal, explicitly set it to `true`.
     *
     * @var bool
     */
    public bool $withDropletAgent;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'region' => 'region', 'size' => 'size', 'image' => 'image', 'sshKeys' => 'ssh_keys', 'backups' => 'backups', 'backupPolicy' => 'backup_policy', 'ipv6' => 'ipv6', 'monitoring' => 'monitoring', 'tags' => 'tags', 'userData' => 'user_data', 'privateNetworking' => 'private_networking', 'volumes' => 'volumes', 'vpcUuid' => 'vpc_uuid', 'withDropletAgent' => 'with_droplet_agent'];
    }
}