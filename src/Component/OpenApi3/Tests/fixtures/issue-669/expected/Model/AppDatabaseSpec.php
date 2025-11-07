<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppDatabaseSpec extends \ArrayObject
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
     * The name of the underlying DigitalOcean DBaaS cluster. This is required for production databases. For dev databases, if cluster_name is not set, a new cluster will be provisioned.
     *
     * @var string
     */
    protected $clusterName;
    /**
     * The name of the MySQL or PostgreSQL database to configure.
     *
     * @var string
     */
    protected $dbName;
    /**
     * The name of the MySQL or PostgreSQL user to configure.
     *
     * @var string
     */
    protected $dbUser;
    /**
     * - MYSQL: MySQL
     * - PG: PostgreSQL
     * - REDIS: Caching
     * - MONGODB: MongoDB
     * - KAFKA: Kafka
     * - OPENSEARCH: OpenSearch
     * - VALKEY: ValKey
     *
     * @var string
     */
    protected $engine = 'UNSET';
    /**
     * The database's name. The name must be unique across all components within the same app and cannot use capital letters.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether this is a production or dev database.
     *
     * @var bool
     */
    protected $production;
    /**
     * The version of the database engine
     *
     * @var string
     */
    protected $version;
    /**
     * The name of the underlying DigitalOcean DBaaS cluster. This is required for production databases. For dev databases, if cluster_name is not set, a new cluster will be provisioned.
     *
     * @return string
     */
    public function getClusterName(): string
    {
        return $this->clusterName;
    }
    /**
     * The name of the underlying DigitalOcean DBaaS cluster. This is required for production databases. For dev databases, if cluster_name is not set, a new cluster will be provisioned.
     *
     * @param string $clusterName
     *
     * @return self
     */
    public function setClusterName(string $clusterName): self
    {
        $this->initialized['clusterName'] = true;
        $this->clusterName = $clusterName;
        return $this;
    }
    /**
     * The name of the MySQL or PostgreSQL database to configure.
     *
     * @return string
     */
    public function getDbName(): string
    {
        return $this->dbName;
    }
    /**
     * The name of the MySQL or PostgreSQL database to configure.
     *
     * @param string $dbName
     *
     * @return self
     */
    public function setDbName(string $dbName): self
    {
        $this->initialized['dbName'] = true;
        $this->dbName = $dbName;
        return $this;
    }
    /**
     * The name of the MySQL or PostgreSQL user to configure.
     *
     * @return string
     */
    public function getDbUser(): string
    {
        return $this->dbUser;
    }
    /**
     * The name of the MySQL or PostgreSQL user to configure.
     *
     * @param string $dbUser
     *
     * @return self
     */
    public function setDbUser(string $dbUser): self
    {
        $this->initialized['dbUser'] = true;
        $this->dbUser = $dbUser;
        return $this;
    }
    /**
     * - MYSQL: MySQL
     * - PG: PostgreSQL
     * - REDIS: Caching
     * - MONGODB: MongoDB
     * - KAFKA: Kafka
     * - OPENSEARCH: OpenSearch
     * - VALKEY: ValKey
     *
     * @return string
     */
    public function getEngine(): string
    {
        return $this->engine;
    }
    /**
    * - MYSQL: MySQL
    - PG: PostgreSQL
    - REDIS: Caching
    - MONGODB: MongoDB
    - KAFKA: Kafka
    - OPENSEARCH: OpenSearch
    - VALKEY: ValKey
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
     * The database's name. The name must be unique across all components within the same app and cannot use capital letters.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The database's name. The name must be unique across all components within the same app and cannot use capital letters.
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
     * Whether this is a production or dev database.
     *
     * @return bool
     */
    public function getProduction(): bool
    {
        return $this->production;
    }
    /**
     * Whether this is a production or dev database.
     *
     * @param bool $production
     *
     * @return self
     */
    public function setProduction(bool $production): self
    {
        $this->initialized['production'] = true;
        $this->production = $production;
        return $this;
    }
    /**
     * The version of the database engine
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * The version of the database engine
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
}