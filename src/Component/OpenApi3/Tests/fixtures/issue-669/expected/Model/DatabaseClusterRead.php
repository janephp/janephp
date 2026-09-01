<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseClusterRead implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference a database cluster.
     *
     * @var string
     */
    public string $id;
    /**
     * A unique, human-readable name referring to a database cluster.
     *
     * @var string
     */
    public string $name;
    /**
     * A slug representing the database engine used for the cluster. The possible values are: "pg" for PostgreSQL, "mysql" for MySQL, "redis" for Caching, "mongodb" for MongoDB, "kafka" for Kafka, "opensearch" for OpenSearch, and "valkey" for Valkey.
     *
     * @var string
     */
    public string $engine;
    /**
     * A string representing the version of the database engine in use for the cluster.
     *
     * @var string
     */
    public string $version;
    /**
     * A string representing the semantic version of the database engine in use for the cluster.
     *
     * @var string
     */
    public string $semanticVersion;
    /**
     * The number of nodes in the database cluster.
     *
     * @var int
     */
    public int $numNodes;
    /**
     * The slug identifier representing the size of the nodes in the database cluster.
     *
     * @var string
     */
    public string $size;
    /**
     * The slug identifier for the region where the database cluster is located.
     *
     * @var string
     */
    public string $region;
    /**
     * A string representing the current status of the database cluster.
     *
     * @var string
     */
    public string $status;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the database cluster was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * A string specifying the UUID of the VPC to which the database cluster will be assigned. If excluded, the cluster when creating a new database cluster, it will be assigned to your account's default VPC for the region. <br><br>Requires `vpc:read` scope.
     *
     * @var string
     */
    public string $privateNetworkUuid;
    /**
     * An array of tags that have been applied to the database cluster. <br><br>Requires `tag:read` scope.
     *
     * @var list<string>|null
     */
    public ?array $tags;
    /**
     * An array of strings containing the names of databases created in the database cluster.
     *
     * @var list<string>|null
     */
    public ?array $dbNames;
    /**
     * The connection details for OpenSearch dashboard.
     *
     * @var DatabaseClusterReadUiConnection
     */
    public DatabaseClusterReadUiConnection $uiConnection;
    /**
     * The connection details for Schema Registry.
     *
     * @var DatabaseClusterReadSchemaRegistryConnection
     */
    public DatabaseClusterReadSchemaRegistryConnection $schemaRegistryConnection;
    /**
     * @var DatabaseClusterReadConnection
     */
    public DatabaseClusterReadConnection $connection;
    /**
     * @var DatabaseClusterReadPrivateConnection
     */
    public DatabaseClusterReadPrivateConnection $privateConnection;
    /**
     * @var DatabaseClusterReadStandbyConnection
     */
    public DatabaseClusterReadStandbyConnection $standbyConnection;
    /**
     * @var DatabaseClusterReadStandbyPrivateConnection
     */
    public DatabaseClusterReadStandbyPrivateConnection $standbyPrivateConnection;
    /**
     * @var list<DatabaseUser>|null
     */
    public ?array $users;
    /**
     * @var DatabaseClusterReadMaintenanceWindow
     */
    public DatabaseClusterReadMaintenanceWindow $maintenanceWindow;
    /**
     * The ID of the project that the database cluster is assigned to. If excluded when creating a new database cluster, it will be assigned to your default project.<br><br>Requires `project:read` scope.
     *
     * @var string
     */
    public string $projectId;
    /**
     * @var list<FirewallRule>
     */
    public array $rules;
    /**
     * A timestamp referring to the date when the particular version will no longer be supported. If null, the version does not have an end of life timeline.
     *
     * @var string
     */
    public string $versionEndOfLife;
    /**
     * A timestamp referring to the date when the particular version will no longer be available for creating new clusters. If null, the version does not have an end of availability timeline.
     *
     * @var string
     */
    public string $versionEndOfAvailability;
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @var int
     */
    public int $storageSizeMib;
    /**
     * Public hostname and port of the cluster's metrics endpoint(s). Includes one record for the cluster's primary node and a second entry for the cluster's standby node(s).
     *
     * @var list<DatabaseServiceEndpoint>
     */
    public array $metricsEndpoints;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'engine' => 'engine', 'version' => 'version', 'semanticVersion' => 'semantic_version', 'numNodes' => 'num_nodes', 'size' => 'size', 'region' => 'region', 'status' => 'status', 'createdAt' => 'created_at', 'privateNetworkUuid' => 'private_network_uuid', 'tags' => 'tags', 'dbNames' => 'db_names', 'uiConnection' => 'ui_connection', 'schemaRegistryConnection' => 'schema_registry_connection', 'connection' => 'connection', 'privateConnection' => 'private_connection', 'standbyConnection' => 'standby_connection', 'standbyPrivateConnection' => 'standby_private_connection', 'users' => 'users', 'maintenanceWindow' => 'maintenance_window', 'projectId' => 'project_id', 'rules' => 'rules', 'versionEndOfLife' => 'version_end_of_life', 'versionEndOfAvailability' => 'version_end_of_availability', 'storageSizeMib' => 'storage_size_mib', 'metricsEndpoints' => 'metrics_endpoints'];
    }
}