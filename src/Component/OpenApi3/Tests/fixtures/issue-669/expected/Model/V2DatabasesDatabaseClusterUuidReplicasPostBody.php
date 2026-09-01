<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidReplicasPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference a database replica.
     *
     * @var string
     */
    public string $id;
    /**
     * The name to give the read-only replicating
     *
     * @var string
     */
    public string $name;
    /**
     * A slug identifier for the region where the read-only replica will be located. If excluded, the replica will be placed in the same region as the cluster.
     *
     * @var string
     */
    public string $region;
    /**
     * A slug identifier representing the size of the node for the read-only replica. The size of the replica must be at least as large as the node size for the database cluster from which it is replicating.
     *
     * @var string
     */
    public string $size;
    /**
     * A string representing the current status of the database cluster.
     *
     * @var string
     */
    public string $status;
    /**
     * A flat array of tag names as strings to apply to the read-only replica after it is created. Tag names can either be existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the database cluster was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * A string specifying the UUID of the VPC to which the read-only replica will be assigned. If excluded, the replica will be assigned to your account's default VPC for the region. <br><br>Requires `vpc:read` scope.
     *
     * @var string
     */
    public string $privateNetworkUuid;
    /**
     * @var DatabaseReplicaConnection
     */
    public DatabaseReplicaConnection $connection;
    /**
     * @var DatabaseReplicaPrivateConnection
     */
    public DatabaseReplicaPrivateConnection $privateConnection;
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @var int
     */
    public int $storageSizeMib;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'region' => 'region', 'size' => 'size', 'status' => 'status', 'tags' => 'tags', 'createdAt' => 'created_at', 'privateNetworkUuid' => 'private_network_uuid', 'connection' => 'connection', 'privateConnection' => 'private_connection', 'storageSizeMib' => 'storage_size_mib'];
    }
}