<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseClusterRead implements AdditionalPropertiesInterface
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
     * A unique ID that can be used to identify and reference a database cluster.
     *
     * @var string
     */
    protected $id;
    /**
     * A unique, human-readable name referring to a database cluster.
     *
     * @var string
     */
    protected $name;
    /**
     * A slug representing the database engine used for the cluster. The possible values are: "pg" for PostgreSQL, "mysql" for MySQL, "redis" for Caching, "mongodb" for MongoDB, "kafka" for Kafka, "opensearch" for OpenSearch, and "valkey" for Valkey.
     *
     * @var string
     */
    protected $engine;
    /**
     * A string representing the version of the database engine in use for the cluster.
     *
     * @var string
     */
    protected $version;
    /**
     * A string representing the semantic version of the database engine in use for the cluster.
     *
     * @var string
     */
    protected $semanticVersion;
    /**
     * The number of nodes in the database cluster.
     *
     * @var int
     */
    protected $numNodes;
    /**
     * The slug identifier representing the size of the nodes in the database cluster.
     *
     * @var string
     */
    protected $size;
    /**
     * The slug identifier for the region where the database cluster is located.
     *
     * @var string
     */
    protected $region;
    /**
     * A string representing the current status of the database cluster.
     *
     * @var string
     */
    protected $status;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the database cluster was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A string specifying the UUID of the VPC to which the database cluster will be assigned. If excluded, the cluster when creating a new database cluster, it will be assigned to your account's default VPC for the region. <br><br>Requires `vpc:read` scope.
     *
     * @var string
     */
    protected $privateNetworkUuid;
    /**
     * An array of tags that have been applied to the database cluster. <br><br>Requires `tag:read` scope.
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * An array of strings containing the names of databases created in the database cluster.
     *
     * @var list<string>|null
     */
    protected $dbNames;
    /**
     * The connection details for OpenSearch dashboard.
     *
     * @var DatabaseClusterReadUiConnection
     */
    protected $uiConnection;
    /**
     * The connection details for Schema Registry.
     *
     * @var DatabaseClusterReadSchemaRegistryConnection
     */
    protected $schemaRegistryConnection;
    /**
     * @var DatabaseClusterReadConnection
     */
    protected $connection;
    /**
     * @var DatabaseClusterReadPrivateConnection
     */
    protected $privateConnection;
    /**
     * @var DatabaseClusterReadStandbyConnection
     */
    protected $standbyConnection;
    /**
     * @var DatabaseClusterReadStandbyPrivateConnection
     */
    protected $standbyPrivateConnection;
    /**
     * @var list<DatabaseUser>|null
     */
    protected $users;
    /**
     * @var DatabaseClusterReadMaintenanceWindow
     */
    protected $maintenanceWindow;
    /**
     * The ID of the project that the database cluster is assigned to. If excluded when creating a new database cluster, it will be assigned to your default project.<br><br>Requires `project:read` scope.
     *
     * @var string
     */
    protected $projectId;
    /**
     * @var list<FirewallRule>
     */
    protected $rules;
    /**
     * A timestamp referring to the date when the particular version will no longer be supported. If null, the version does not have an end of life timeline.
     *
     * @var string
     */
    protected $versionEndOfLife;
    /**
     * A timestamp referring to the date when the particular version will no longer be available for creating new clusters. If null, the version does not have an end of availability timeline.
     *
     * @var string
     */
    protected $versionEndOfAvailability;
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @var int
     */
    protected $storageSizeMib;
    /**
     * Public hostname and port of the cluster's metrics endpoint(s). Includes one record for the cluster's primary node and a second entry for the cluster's standby node(s).
     *
     * @var list<DatabaseServiceEndpoint>
     */
    protected $metricsEndpoints;
    /**
     * A unique ID that can be used to identify and reference a database cluster.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference a database cluster.
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
     * A unique, human-readable name referring to a database cluster.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A unique, human-readable name referring to a database cluster.
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
     * A slug representing the database engine used for the cluster. The possible values are: "pg" for PostgreSQL, "mysql" for MySQL, "redis" for Caching, "mongodb" for MongoDB, "kafka" for Kafka, "opensearch" for OpenSearch, and "valkey" for Valkey.
     *
     * @return string
     */
    public function getEngine(): string
    {
        return $this->engine;
    }
    /**
     * A slug representing the database engine used for the cluster. The possible values are: "pg" for PostgreSQL, "mysql" for MySQL, "redis" for Caching, "mongodb" for MongoDB, "kafka" for Kafka, "opensearch" for OpenSearch, and "valkey" for Valkey.
     *
     * @param string $engine
     *
     * @return self
     */
    public function setEngine(string $engine): self
    {
        $this->initialized['engine'] = true;
        $this->engine = $engine;
        return $this;
    }
    /**
     * A string representing the version of the database engine in use for the cluster.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * A string representing the version of the database engine in use for the cluster.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * A string representing the semantic version of the database engine in use for the cluster.
     *
     * @return string
     */
    public function getSemanticVersion(): string
    {
        return $this->semanticVersion;
    }
    /**
     * A string representing the semantic version of the database engine in use for the cluster.
     *
     * @param string $semanticVersion
     *
     * @return self
     */
    public function setSemanticVersion(string $semanticVersion): self
    {
        $this->initialized['semanticVersion'] = true;
        $this->semanticVersion = $semanticVersion;
        return $this;
    }
    /**
     * The number of nodes in the database cluster.
     *
     * @return int
     */
    public function getNumNodes(): int
    {
        return $this->numNodes;
    }
    /**
     * The number of nodes in the database cluster.
     *
     * @param int $numNodes
     *
     * @return self
     */
    public function setNumNodes(int $numNodes): self
    {
        $this->initialized['numNodes'] = true;
        $this->numNodes = $numNodes;
        return $this;
    }
    /**
     * The slug identifier representing the size of the nodes in the database cluster.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
     * The slug identifier representing the size of the nodes in the database cluster.
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
     * The slug identifier for the region where the database cluster is located.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug identifier for the region where the database cluster is located.
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
     * A string specifying the UUID of the VPC to which the database cluster will be assigned. If excluded, the cluster when creating a new database cluster, it will be assigned to your account's default VPC for the region. <br><br>Requires `vpc:read` scope.
     *
     * @return string
     */
    public function getPrivateNetworkUuid(): string
    {
        return $this->privateNetworkUuid;
    }
    /**
     * A string specifying the UUID of the VPC to which the database cluster will be assigned. If excluded, the cluster when creating a new database cluster, it will be assigned to your account's default VPC for the region. <br><br>Requires `vpc:read` scope.
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
     * An array of tags that have been applied to the database cluster. <br><br>Requires `tag:read` scope.
     *
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * An array of tags that have been applied to the database cluster. <br><br>Requires `tag:read` scope.
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
     * An array of strings containing the names of databases created in the database cluster.
     *
     * @return list<string>|null
     */
    public function getDbNames(): ?array
    {
        return $this->dbNames;
    }
    /**
     * An array of strings containing the names of databases created in the database cluster.
     *
     * @param list<string>|null $dbNames
     *
     * @return self
     */
    public function setDbNames(?array $dbNames): self
    {
        $this->initialized['dbNames'] = true;
        $this->dbNames = $dbNames;
        return $this;
    }
    /**
     * The connection details for OpenSearch dashboard.
     *
     * @return DatabaseClusterReadUiConnection
     */
    public function getUiConnection(): DatabaseClusterReadUiConnection
    {
        return $this->uiConnection;
    }
    /**
     * The connection details for OpenSearch dashboard. 
     *
     * @param DatabaseClusterReadUiConnection $uiConnection
     *
     * @return self
     */
    public function setUiConnection(DatabaseClusterReadUiConnection $uiConnection): self
    {
        $this->initialized['uiConnection'] = true;
        $this->uiConnection = $uiConnection;
        return $this;
    }
    /**
     * The connection details for Schema Registry.
     *
     * @return DatabaseClusterReadSchemaRegistryConnection
     */
    public function getSchemaRegistryConnection(): DatabaseClusterReadSchemaRegistryConnection
    {
        return $this->schemaRegistryConnection;
    }
    /**
     * The connection details for Schema Registry.
     *
     * @param DatabaseClusterReadSchemaRegistryConnection $schemaRegistryConnection
     *
     * @return self
     */
    public function setSchemaRegistryConnection(DatabaseClusterReadSchemaRegistryConnection $schemaRegistryConnection): self
    {
        $this->initialized['schemaRegistryConnection'] = true;
        $this->schemaRegistryConnection = $schemaRegistryConnection;
        return $this;
    }
    /**
     * @return DatabaseClusterReadConnection
     */
    public function getConnection(): DatabaseClusterReadConnection
    {
        return $this->connection;
    }
    /**
     * @param DatabaseClusterReadConnection $connection
     *
     * @return self
     */
    public function setConnection(DatabaseClusterReadConnection $connection): self
    {
        $this->initialized['connection'] = true;
        $this->connection = $connection;
        return $this;
    }
    /**
     * @return DatabaseClusterReadPrivateConnection
     */
    public function getPrivateConnection(): DatabaseClusterReadPrivateConnection
    {
        return $this->privateConnection;
    }
    /**
     * @param DatabaseClusterReadPrivateConnection $privateConnection
     *
     * @return self
     */
    public function setPrivateConnection(DatabaseClusterReadPrivateConnection $privateConnection): self
    {
        $this->initialized['privateConnection'] = true;
        $this->privateConnection = $privateConnection;
        return $this;
    }
    /**
     * @return DatabaseClusterReadStandbyConnection
     */
    public function getStandbyConnection(): DatabaseClusterReadStandbyConnection
    {
        return $this->standbyConnection;
    }
    /**
     * @param DatabaseClusterReadStandbyConnection $standbyConnection
     *
     * @return self
     */
    public function setStandbyConnection(DatabaseClusterReadStandbyConnection $standbyConnection): self
    {
        $this->initialized['standbyConnection'] = true;
        $this->standbyConnection = $standbyConnection;
        return $this;
    }
    /**
     * @return DatabaseClusterReadStandbyPrivateConnection
     */
    public function getStandbyPrivateConnection(): DatabaseClusterReadStandbyPrivateConnection
    {
        return $this->standbyPrivateConnection;
    }
    /**
     * @param DatabaseClusterReadStandbyPrivateConnection $standbyPrivateConnection
     *
     * @return self
     */
    public function setStandbyPrivateConnection(DatabaseClusterReadStandbyPrivateConnection $standbyPrivateConnection): self
    {
        $this->initialized['standbyPrivateConnection'] = true;
        $this->standbyPrivateConnection = $standbyPrivateConnection;
        return $this;
    }
    /**
     * @return list<DatabaseUser>|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }
    /**
     * @param list<DatabaseUser>|null $users
     *
     * @return self
     */
    public function setUsers(?array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
    /**
     * @return DatabaseClusterReadMaintenanceWindow
     */
    public function getMaintenanceWindow(): DatabaseClusterReadMaintenanceWindow
    {
        return $this->maintenanceWindow;
    }
    /**
     * @param DatabaseClusterReadMaintenanceWindow $maintenanceWindow
     *
     * @return self
     */
    public function setMaintenanceWindow(DatabaseClusterReadMaintenanceWindow $maintenanceWindow): self
    {
        $this->initialized['maintenanceWindow'] = true;
        $this->maintenanceWindow = $maintenanceWindow;
        return $this;
    }
    /**
     * The ID of the project that the database cluster is assigned to. If excluded when creating a new database cluster, it will be assigned to your default project.<br><br>Requires `project:read` scope.
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The ID of the project that the database cluster is assigned to. If excluded when creating a new database cluster, it will be assigned to your default project.<br><br>Requires `project:read` scope.
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
     * @return list<FirewallRule>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * @param list<FirewallRule> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * A timestamp referring to the date when the particular version will no longer be supported. If null, the version does not have an end of life timeline.
     *
     * @return string
     */
    public function getVersionEndOfLife(): string
    {
        return $this->versionEndOfLife;
    }
    /**
     * A timestamp referring to the date when the particular version will no longer be supported. If null, the version does not have an end of life timeline.
     *
     * @param string $versionEndOfLife
     *
     * @return self
     */
    public function setVersionEndOfLife(string $versionEndOfLife): self
    {
        $this->initialized['versionEndOfLife'] = true;
        $this->versionEndOfLife = $versionEndOfLife;
        return $this;
    }
    /**
     * A timestamp referring to the date when the particular version will no longer be available for creating new clusters. If null, the version does not have an end of availability timeline.
     *
     * @return string
     */
    public function getVersionEndOfAvailability(): string
    {
        return $this->versionEndOfAvailability;
    }
    /**
     * A timestamp referring to the date when the particular version will no longer be available for creating new clusters. If null, the version does not have an end of availability timeline.
     *
     * @param string $versionEndOfAvailability
     *
     * @return self
     */
    public function setVersionEndOfAvailability(string $versionEndOfAvailability): self
    {
        $this->initialized['versionEndOfAvailability'] = true;
        $this->versionEndOfAvailability = $versionEndOfAvailability;
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
    /**
     * Public hostname and port of the cluster's metrics endpoint(s). Includes one record for the cluster's primary node and a second entry for the cluster's standby node(s).
     *
     * @return list<DatabaseServiceEndpoint>
     */
    public function getMetricsEndpoints(): array
    {
        return $this->metricsEndpoints;
    }
    /**
     * Public hostname and port of the cluster's metrics endpoint(s). Includes one record for the cluster's primary node and a second entry for the cluster's standby node(s).
     *
     * @param list<DatabaseServiceEndpoint> $metricsEndpoints
     *
     * @return self
     */
    public function setMetricsEndpoints(array $metricsEndpoints): self
    {
        $this->initialized['metricsEndpoints'] = true;
        $this->metricsEndpoints = $metricsEndpoints;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'engine' => ['engine', 'getEngine', 'setEngine'], 'version' => ['version', 'getVersion', 'setVersion'], 'semanticVersion' => ['semantic_version', 'getSemanticVersion', 'setSemanticVersion'], 'numNodes' => ['num_nodes', 'getNumNodes', 'setNumNodes'], 'size' => ['size', 'getSize', 'setSize'], 'region' => ['region', 'getRegion', 'setRegion'], 'status' => ['status', 'getStatus', 'setStatus'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'privateNetworkUuid' => ['private_network_uuid', 'getPrivateNetworkUuid', 'setPrivateNetworkUuid'], 'tags' => ['tags', 'getTags', 'setTags'], 'dbNames' => ['db_names', 'getDbNames', 'setDbNames'], 'uiConnection' => ['ui_connection', 'getUiConnection', 'setUiConnection'], 'schemaRegistryConnection' => ['schema_registry_connection', 'getSchemaRegistryConnection', 'setSchemaRegistryConnection'], 'connection' => ['connection', 'getConnection', 'setConnection'], 'privateConnection' => ['private_connection', 'getPrivateConnection', 'setPrivateConnection'], 'standbyConnection' => ['standby_connection', 'getStandbyConnection', 'setStandbyConnection'], 'standbyPrivateConnection' => ['standby_private_connection', 'getStandbyPrivateConnection', 'setStandbyPrivateConnection'], 'users' => ['users', 'getUsers', 'setUsers'], 'maintenanceWindow' => ['maintenance_window', 'getMaintenanceWindow', 'setMaintenanceWindow'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId'], 'rules' => ['rules', 'getRules', 'setRules'], 'versionEndOfLife' => ['version_end_of_life', 'getVersionEndOfLife', 'setVersionEndOfLife'], 'versionEndOfAvailability' => ['version_end_of_availability', 'getVersionEndOfAvailability', 'setVersionEndOfAvailability'], 'storageSizeMib' => ['storage_size_mib', 'getStorageSizeMib', 'setStorageSizeMib'], 'metricsEndpoints' => ['metrics_endpoints', 'getMetricsEndpoints', 'setMetricsEndpoints']];
    }
}