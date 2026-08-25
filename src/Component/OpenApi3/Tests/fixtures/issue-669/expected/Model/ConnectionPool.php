<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ConnectionPool implements AdditionalPropertiesInterface
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
     * A unique name for the connection pool. Must be between 3 and 60 characters.
     *
     * @var string
     */
    protected $name;
    /**
     * The PGBouncer transaction mode for the connection pool. The allowed values are session, transaction, and statement.
     *
     * @var string
     */
    protected $mode;
    /**
     * The desired size of the PGBouncer connection pool. The maximum allowed size is determined by the size of the cluster's primary node. 25 backend server connections are allowed for every 1GB of RAM. Three are reserved for maintenance. For example, a primary node with 1 GB of RAM allows for a maximum of 22 backend server connections while one with 4 GB would allow for 97. Note that these are shared across all connection pools in a cluster.
     *
     * @var int
     */
    protected $size;
    /**
     * The database for use with the connection pool.
     *
     * @var string
     */
    protected $db;
    /**
     * The name of the user for use with the connection pool. When excluded, all sessions connect to the database as the inbound user.
     *
     * @var string
     */
    protected $user;
    /**
     * @var ConnectionPoolConnection
     */
    protected $connection;
    /**
     * @var ConnectionPoolPrivateConnection
     */
    protected $privateConnection;
    /**
     * @var ConnectionPoolStandbyConnection
     */
    protected $standbyConnection;
    /**
     * @var ConnectionPoolStandbyPrivateConnection
     */
    protected $standbyPrivateConnection;
    /**
     * A unique name for the connection pool. Must be between 3 and 60 characters.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A unique name for the connection pool. Must be between 3 and 60 characters.
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
     * The PGBouncer transaction mode for the connection pool. The allowed values are session, transaction, and statement.
     *
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }
    /**
     * The PGBouncer transaction mode for the connection pool. The allowed values are session, transaction, and statement.
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * The desired size of the PGBouncer connection pool. The maximum allowed size is determined by the size of the cluster's primary node. 25 backend server connections are allowed for every 1GB of RAM. Three are reserved for maintenance. For example, a primary node with 1 GB of RAM allows for a maximum of 22 backend server connections while one with 4 GB would allow for 97. Note that these are shared across all connection pools in a cluster.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * The desired size of the PGBouncer connection pool. The maximum allowed size is determined by the size of the cluster's primary node. 25 backend server connections are allowed for every 1GB of RAM. Three are reserved for maintenance. For example, a primary node with 1 GB of RAM allows for a maximum of 22 backend server connections while one with 4 GB would allow for 97. Note that these are shared across all connection pools in a cluster.
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The database for use with the connection pool.
     *
     * @return string
     */
    public function getDb(): string
    {
        return $this->db;
    }
    /**
     * The database for use with the connection pool.
     *
     * @param string $db
     *
     * @return self
     */
    public function setDb(string $db): self
    {
        $this->initialized['db'] = true;
        $this->db = $db;
        return $this;
    }
    /**
     * The name of the user for use with the connection pool. When excluded, all sessions connect to the database as the inbound user.
     *
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }
    /**
     * The name of the user for use with the connection pool. When excluded, all sessions connect to the database as the inbound user.
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * @return ConnectionPoolConnection
     */
    public function getConnection(): ConnectionPoolConnection
    {
        return $this->connection;
    }
    /**
     * @param ConnectionPoolConnection $connection
     *
     * @return self
     */
    public function setConnection(ConnectionPoolConnection $connection): self
    {
        $this->initialized['connection'] = true;
        $this->connection = $connection;
        return $this;
    }
    /**
     * @return ConnectionPoolPrivateConnection
     */
    public function getPrivateConnection(): ConnectionPoolPrivateConnection
    {
        return $this->privateConnection;
    }
    /**
     * @param ConnectionPoolPrivateConnection $privateConnection
     *
     * @return self
     */
    public function setPrivateConnection(ConnectionPoolPrivateConnection $privateConnection): self
    {
        $this->initialized['privateConnection'] = true;
        $this->privateConnection = $privateConnection;
        return $this;
    }
    /**
     * @return ConnectionPoolStandbyConnection
     */
    public function getStandbyConnection(): ConnectionPoolStandbyConnection
    {
        return $this->standbyConnection;
    }
    /**
     * @param ConnectionPoolStandbyConnection $standbyConnection
     *
     * @return self
     */
    public function setStandbyConnection(ConnectionPoolStandbyConnection $standbyConnection): self
    {
        $this->initialized['standbyConnection'] = true;
        $this->standbyConnection = $standbyConnection;
        return $this;
    }
    /**
     * @return ConnectionPoolStandbyPrivateConnection
     */
    public function getStandbyPrivateConnection(): ConnectionPoolStandbyPrivateConnection
    {
        return $this->standbyPrivateConnection;
    }
    /**
     * @param ConnectionPoolStandbyPrivateConnection $standbyPrivateConnection
     *
     * @return self
     */
    public function setStandbyPrivateConnection(ConnectionPoolStandbyPrivateConnection $standbyPrivateConnection): self
    {
        $this->initialized['standbyPrivateConnection'] = true;
        $this->standbyPrivateConnection = $standbyPrivateConnection;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'mode' => ['mode', 'getMode', 'setMode'], 'size' => ['size', 'getSize', 'setSize'], 'db' => ['db', 'getDb', 'setDb'], 'user' => ['user', 'getUser', 'setUser'], 'connection' => ['connection', 'getConnection', 'setConnection'], 'privateConnection' => ['private_connection', 'getPrivateConnection', 'setPrivateConnection'], 'standbyConnection' => ['standby_connection', 'getStandbyConnection', 'setStandbyConnection'], 'standbyPrivateConnection' => ['standby_private_connection', 'getStandbyPrivateConnection', 'setStandbyPrivateConnection']];
    }
}