<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppDatabaseSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the underlying DigitalOcean DBaaS cluster. This is required for production databases. For dev databases, if cluster_name is not set, a new cluster will be provisioned.
     *
     * @var string
     */
    public string $clusterName;
    /**
     * The name of the MySQL or PostgreSQL database to configure.
     *
     * @var string
     */
    public string $dbName;
    /**
     * The name of the MySQL or PostgreSQL user to configure.
     *
     * @var string
     */
    public string $dbUser;
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
    public string $engine = 'UNSET';
    /**
     * The database's name. The name must be unique across all components within the same app and cannot use capital letters.
     *
     * @var string
     */
    public string $name;
    /**
     * Whether this is a production or dev database.
     *
     * @var bool
     */
    public bool $production;
    /**
     * The version of the database engine
     *
     * @var string
     */
    public string $version;
    public function definedProperties(): array
    {
        return ['clusterName' => 'cluster_name', 'dbName' => 'db_name', 'dbUser' => 'db_user', 'engine' => 'engine', 'name' => 'name', 'production' => 'production', 'version' => 'version'];
    }
}