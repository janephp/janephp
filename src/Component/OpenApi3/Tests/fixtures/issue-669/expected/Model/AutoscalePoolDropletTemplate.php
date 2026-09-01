<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AutoscalePoolDropletTemplate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name(s) to be applied to all Droplets in the autoscale pool.
     *
     * @var string
     */
    public string $name;
    /**
     * The datacenter in which all of the Droplets will be created.
     *
     * @var string
     */
    public string $region;
    /**
     * The Droplet size to be used for all Droplets in the autoscale pool.
     *
     * @var string
     */
    public string $size;
    /**
     * The Droplet image to be used for all Droplets in the autoscale pool. You may specify the slug or the image ID.
     *
     * @var string
     */
    public string $image;
    /**
     * The SSH keys to be installed on the Droplets in the autoscale pool. You can either specify the key ID or the fingerprint.
     * Requires `ssh_key:read` scope.
     * 
     *
     * @var list<string>
     */
    public array $sshKeys;
    /**
     * The tags to apply to each of the Droplets in the autoscale pool.
     * Requires `tag:read` scope.
     * 
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * The VPC where the Droplets in the autoscale pool will be created. The VPC must be in the region where you want to create the Droplets.
     * Requires `vpc:read` scope.
     * 
     *
     * @var string
     */
    public string $vpcUuid;
    /**
     * Installs the Droplet agent. This must be set to true to monitor Droplets for resource utilization scaling.
     *
     * @var bool
     */
    public bool $withDropletAgent;
    /**
     * The project that the Droplets in the autoscale pool will belong to.
     * Requires `project:read` scope.
     * 
     *
     * @var string
     */
    public string $projectId;
    /**
     * Assigns a unique IPv6 address to each of the Droplets in the autoscale pool.
     *
     * @var bool
     */
    public bool $ipv6;
    /**
     * A string containing user data that cloud-init consumes to configure a Droplet on first boot. User data is often a cloud-config file or Bash script. It must be plain text and may not exceed 64 KiB in size.
     *
     * @var string
     */
    public string $userData;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'region' => 'region', 'size' => 'size', 'image' => 'image', 'sshKeys' => 'ssh_keys', 'tags' => 'tags', 'vpcUuid' => 'vpc_uuid', 'withDropletAgent' => 'with_droplet_agent', 'projectId' => 'project_id', 'ipv6' => 'ipv6', 'userData' => 'user_data'];
    }
}