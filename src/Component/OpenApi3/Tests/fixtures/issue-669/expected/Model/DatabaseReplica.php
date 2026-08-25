<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseReplica implements AdditionalPropertiesInterface
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
     * A unique ID that can be used to identify and reference a database replica.
     *
     * @var string
     */
    protected $id;
    /**
     * The name to give the read-only replicating
     *
     * @var string
     */
    protected $name;
    /**
     * A slug identifier for the region where the read-only replica will be located. If excluded, the replica will be placed in the same region as the cluster.
     *
     * @var string
     */
    protected $region;
    /**
     * A slug identifier representing the size of the node for the read-only replica. The size of the replica must be at least as large as the node size for the database cluster from which it is replicating.
     *
     * @var string
     */
    protected $size;
    /**
     * A string representing the current status of the database cluster.
     *
     * @var string
     */
    protected $status;
    /**
     * A flat array of tag names as strings to apply to the read-only replica after it is created. Tag names can either be existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the database cluster was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A string specifying the UUID of the VPC to which the read-only replica will be assigned. If excluded, the replica will be assigned to your account's default VPC for the region. <br><br>Requires `vpc:read` scope.
     *
     * @var string
     */
    protected $privateNetworkUuid;
    /**
     * @var DatabaseReplicaConnection
     */
    protected $connection;
    /**
     * @var DatabaseReplicaPrivateConnection
     */
    protected $privateConnection;
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @var int
     */
    protected $storageSizeMib;
    /**
     * A unique ID that can be used to identify and reference a database replica.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference a database replica.
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
     * The name to give the read-only replicating
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name to give the read-only replicating
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
     * A slug identifier for the region where the read-only replica will be located. If excluded, the replica will be placed in the same region as the cluster.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * A slug identifier for the region where the read-only replica will be located. If excluded, the replica will be placed in the same region as the cluster.
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
     * A slug identifier representing the size of the node for the read-only replica. The size of the replica must be at least as large as the node size for the database cluster from which it is replicating.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
     * A slug identifier representing the size of the node for the read-only replica. The size of the replica must be at least as large as the node size for the database cluster from which it is replicating.
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
     * A string representing the current status of the database cluster.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * A string representing the current status of the database cluster.
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
     * A flat array of tag names as strings to apply to the read-only replica after it is created. Tag names can either be existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * A flat array of tag names as strings to apply to the read-only replica after it is created. Tag names can either be existing or new tags. <br><br>Requires `tag:create` scope.
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
     * A time value given in ISO8601 combined date and time format that represents when the database cluster was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the database cluster was created.
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
     * A string specifying the UUID of the VPC to which the read-only replica will be assigned. If excluded, the replica will be assigned to your account's default VPC for the region. <br><br>Requires `vpc:read` scope.
     *
     * @return string
     */
    public function getPrivateNetworkUuid(): string
    {
        return $this->privateNetworkUuid;
    }
    /**
     * A string specifying the UUID of the VPC to which the read-only replica will be assigned. If excluded, the replica will be assigned to your account's default VPC for the region. <br><br>Requires `vpc:read` scope.
     *
     * @param string $privateNetworkUuid
     *
     * @return self
     */
    public function setPrivateNetworkUuid(string $privateNetworkUuid): self
    {
        $this->initialized['privateNetworkUuid'] = true;
        $this->privateNetworkUuid = $privateNetworkUuid;
        return $this;
    }
    /**
     * @return DatabaseReplicaConnection
     */
    public function getConnection(): DatabaseReplicaConnection
    {
        return $this->connection;
    }
    /**
     * @param DatabaseReplicaConnection $connection
     *
     * @return self
     */
    public function setConnection(DatabaseReplicaConnection $connection): self
    {
        $this->initialized['connection'] = true;
        $this->connection = $connection;
        return $this;
    }
    /**
     * @return DatabaseReplicaPrivateConnection
     */
    public function getPrivateConnection(): DatabaseReplicaPrivateConnection
    {
        return $this->privateConnection;
    }
    /**
     * @param DatabaseReplicaPrivateConnection $privateConnection
     *
     * @return self
     */
    public function setPrivateConnection(DatabaseReplicaPrivateConnection $privateConnection): self
    {
        $this->initialized['privateConnection'] = true;
        $this->privateConnection = $privateConnection;
        return $this;
    }
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @return int
     */
    public function getStorageSizeMib(): int
    {
        return $this->storageSizeMib;
    }
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @param int $storageSizeMib
     *
     * @return self
     */
    public function setStorageSizeMib(int $storageSizeMib): self
    {
        $this->initialized['storageSizeMib'] = true;
        $this->storageSizeMib = $storageSizeMib;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'region' => ['region', 'getRegion', 'setRegion'], 'size' => ['size', 'getSize', 'setSize'], 'status' => ['status', 'getStatus', 'setStatus'], 'tags' => ['tags', 'getTags', 'setTags'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'privateNetworkUuid' => ['private_network_uuid', 'getPrivateNetworkUuid', 'setPrivateNetworkUuid'], 'connection' => ['connection', 'getConnection', 'setConnection'], 'privateConnection' => ['private_connection', 'getPrivateConnection', 'setPrivateConnection'], 'storageSizeMib' => ['storage_size_mib', 'getStorageSizeMib', 'setStorageSizeMib']];
    }
}