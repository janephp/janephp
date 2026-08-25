<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsResponse implements AdditionalPropertiesInterface
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
     * The unique identifier of the NFS share.
     *
     * @var string
     */
    protected $id;
    /**
     * The human-readable name of the share.
     *
     * @var string
     */
    protected $name;
    /**
     * The desired/provisioned size of the share in GiB (Gibibytes). Must be >= 50.
     *
     * @var int
     */
    protected $sizeGib;
    /**
     * The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     *
     * @var string
     */
    protected $region;
    /**
     * The current status of the share.
     *
     * @var string
     */
    protected $status;
    /**
     * Timestamp for when the NFS share was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * List of VPC IDs that should be able to access the share.
     *
     * @var list<string>
     */
    protected $vpcIds;
    /**
     * Path at which the share will be available, to be mounted at a target of the user's choice within the client
     *
     * @var string
     */
    protected $mountPath;
    /**
     * The host IP of the NFS server that will be accessible from the associated VPC
     *
     * @var string
     */
    protected $host;
    /**
     * The unique identifier of the NFS share.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the NFS share.
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
     * The human-readable name of the share.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name of the share.
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
     * The desired/provisioned size of the share in GiB (Gibibytes). Must be >= 50.
     *
     * @return int
     */
    public function getSizeGib(): int
    {
        return $this->sizeGib;
    }
    /**
     * The desired/provisioned size of the share in GiB (Gibibytes). Must be >= 50.
     *
     * @param int $sizeGib
     *
     * @return self
     */
    public function setSizeGib(int $sizeGib): self
    {
        $this->initialized['sizeGib'] = true;
        $this->sizeGib = $sizeGib;
        return $this;
    }
    /**
     * The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
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
     * The current status of the share.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The current status of the share.
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
     * Timestamp for when the NFS share was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Timestamp for when the NFS share was created.
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
     * List of VPC IDs that should be able to access the share.
     *
     * @return list<string>
     */
    public function getVpcIds(): array
    {
        return $this->vpcIds;
    }
    /**
     * List of VPC IDs that should be able to access the share.
     *
     * @param list<string> $vpcIds
     *
     * @return self
     */
    public function setVpcIds(array $vpcIds): self
    {
        $this->initialized['vpcIds'] = true;
        $this->vpcIds = $vpcIds;
        return $this;
    }
    /**
     * Path at which the share will be available, to be mounted at a target of the user's choice within the client
     *
     * @return string
     */
    public function getMountPath(): string
    {
        return $this->mountPath;
    }
    /**
     * Path at which the share will be available, to be mounted at a target of the user's choice within the client
     *
     * @param string $mountPath
     *
     * @return self
     */
    public function setMountPath(string $mountPath): self
    {
        $this->initialized['mountPath'] = true;
        $this->mountPath = $mountPath;
        return $this;
    }
    /**
     * The host IP of the NFS server that will be accessible from the associated VPC
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
    /**
     * The host IP of the NFS server that will be accessible from the associated VPC
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost(string $host): self
    {
        $this->initialized['host'] = true;
        $this->host = $host;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'sizeGib' => ['size_gib', 'getSizeGib', 'setSizeGib'], 'region' => ['region', 'getRegion', 'setRegion'], 'status' => ['status', 'getStatus', 'setStatus'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'vpcIds' => ['vpc_ids', 'getVpcIds', 'setVpcIds'], 'mountPath' => ['mount_path', 'getMountPath', 'setMountPath'], 'host' => ['host', 'getHost', 'setHost']];
    }
}