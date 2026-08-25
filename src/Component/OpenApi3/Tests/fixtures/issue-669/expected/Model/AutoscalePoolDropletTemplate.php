<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AutoscalePoolDropletTemplate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The name(s) to be applied to all Droplets in the autoscale pool.
     *
     * @var string
     */
    protected $name;
    /**
     * The datacenter in which all of the Droplets will be created.
     *
     * @var string
     */
    protected $region;
    /**
     * The Droplet size to be used for all Droplets in the autoscale pool.
     *
     * @var string
     */
    protected $size;
    /**
     * The Droplet image to be used for all Droplets in the autoscale pool. You may specify the slug or the image ID.
     *
     * @var string
     */
    protected $image;
    /**
     * The SSH keys to be installed on the Droplets in the autoscale pool. You can either specify the key ID or the fingerprint.
     * Requires `ssh_key:read` scope.
     * 
     *
     * @var list<string>
     */
    protected $sshKeys;
    /**
     * The tags to apply to each of the Droplets in the autoscale pool.
     * Requires `tag:read` scope.
     * 
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * The VPC where the Droplets in the autoscale pool will be created. The VPC must be in the region where you want to create the Droplets.
     * Requires `vpc:read` scope.
     * 
     *
     * @var string
     */
    protected $vpcUuid;
    /**
     * Installs the Droplet agent. This must be set to true to monitor Droplets for resource utilization scaling.
     *
     * @var bool
     */
    protected $withDropletAgent;
    /**
     * The project that the Droplets in the autoscale pool will belong to.
     * Requires `project:read` scope.
     * 
     *
     * @var string
     */
    protected $projectId;
    /**
     * Assigns a unique IPv6 address to each of the Droplets in the autoscale pool.
     *
     * @var bool
     */
    protected $ipv6;
    /**
     * A string containing user data that cloud-init consumes to configure a Droplet on first boot. User data is often a cloud-config file or Bash script. It must be plain text and may not exceed 64 KiB in size.
     *
     * @var string
     */
    protected $userData;
    /**
     * The name(s) to be applied to all Droplets in the autoscale pool.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name(s) to be applied to all Droplets in the autoscale pool.
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
     * The datacenter in which all of the Droplets will be created.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The datacenter in which all of the Droplets will be created.
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
     * The Droplet size to be used for all Droplets in the autoscale pool.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
     * The Droplet size to be used for all Droplets in the autoscale pool.
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
     * The Droplet image to be used for all Droplets in the autoscale pool. You may specify the slug or the image ID.
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * The Droplet image to be used for all Droplets in the autoscale pool. You may specify the slug or the image ID.
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * The SSH keys to be installed on the Droplets in the autoscale pool. You can either specify the key ID or the fingerprint.
     * Requires `ssh_key:read` scope.
     * 
     *
     * @return list<string>
     */
    public function getSshKeys(): array
    {
        return $this->sshKeys;
    }
    /**
    * The SSH keys to be installed on the Droplets in the autoscale pool. You can either specify the key ID or the fingerprint.
    Requires `ssh_key:read` scope.
    
    *
    * @param list<string> $sshKeys
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
     * The tags to apply to each of the Droplets in the autoscale pool.
     * Requires `tag:read` scope.
     * 
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
    * The tags to apply to each of the Droplets in the autoscale pool.
    Requires `tag:read` scope.
    
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
     * The VPC where the Droplets in the autoscale pool will be created. The VPC must be in the region where you want to create the Droplets.
     * Requires `vpc:read` scope.
     * 
     *
     * @return string
     */
    public function getVpcUuid(): string
    {
        return $this->vpcUuid;
    }
    /**
    * The VPC where the Droplets in the autoscale pool will be created. The VPC must be in the region where you want to create the Droplets.
    Requires `vpc:read` scope.
    
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
     * Installs the Droplet agent. This must be set to true to monitor Droplets for resource utilization scaling.
     *
     * @return bool
     */
    public function getWithDropletAgent(): bool
    {
        return $this->withDropletAgent;
    }
    /**
     * Installs the Droplet agent. This must be set to true to monitor Droplets for resource utilization scaling.
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
    /**
     * The project that the Droplets in the autoscale pool will belong to.
     * Requires `project:read` scope.
     * 
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
    * The project that the Droplets in the autoscale pool will belong to.
    Requires `project:read` scope.
    
    *
    * @param string $projectId
    *
    * @return self
    */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Assigns a unique IPv6 address to each of the Droplets in the autoscale pool.
     *
     * @return bool
     */
    public function getIpv6(): bool
    {
        return $this->ipv6;
    }
    /**
     * Assigns a unique IPv6 address to each of the Droplets in the autoscale pool.
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
     * A string containing user data that cloud-init consumes to configure a Droplet on first boot. User data is often a cloud-config file or Bash script. It must be plain text and may not exceed 64 KiB in size.
     *
     * @return string
     */
    public function getUserData(): string
    {
        return $this->userData;
    }
    /**
     * A string containing user data that cloud-init consumes to configure a Droplet on first boot. User data is often a cloud-config file or Bash script. It must be plain text and may not exceed 64 KiB in size.
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
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'region' => ['region', 'getRegion', 'setRegion'], 'size' => ['size', 'getSize', 'setSize'], 'image' => ['image', 'getImage', 'setImage'], 'sshKeys' => ['ssh_keys', 'getSshKeys', 'setSshKeys'], 'tags' => ['tags', 'getTags', 'setTags'], 'vpcUuid' => ['vpc_uuid', 'getVpcUuid', 'setVpcUuid'], 'withDropletAgent' => ['with_droplet_agent', 'getWithDropletAgent', 'setWithDropletAgent'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId'], 'ipv6' => ['ipv6', 'getIpv6', 'setIpv6'], 'userData' => ['user_data', 'getUserData', 'setUserData']];
    }
}