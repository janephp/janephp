<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseReplicaConnection extends \ArrayObject
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
     * A connection string in the format accepted by the `psql` command. This is provided as a convenience and should be able to be constructed by the other attributes.
     *
     * @var string
     */
    protected $uri;
    /**
     * The name of the default database.
     *
     * @var string
     */
    protected $database;
    /**
     * The FQDN pointing to the database cluster's current primary node.
     *
     * @var string
     */
    protected $host;
    /**
     * The port on which the database cluster is listening.
     *
     * @var int
     */
    protected $port;
    /**
     * The default user for the database.<br><br>Requires `database:view_credentials` scope.
     *
     * @var string
     */
    protected $user;
    /**
     * The randomly generated password for the default user.<br><br>Requires `database:view_credentials` scope.
     *
     * @var string
     */
    protected $password;
    /**
     * A boolean value indicating if the connection should be made over SSL.
     *
     * @var bool
     */
    protected $ssl;
    /**
     * A connection string in the format accepted by the `psql` command. This is provided as a convenience and should be able to be constructed by the other attributes.
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
    /**
     * A connection string in the format accepted by the `psql` command. This is provided as a convenience and should be able to be constructed by the other attributes.
     *
     * @param string $uri
     *
     * @return self
     */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
    /**
     * The name of the default database.
     *
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }
    /**
     * The name of the default database.
     *
     * @param string $database
     *
     * @return self
     */
    public function setDatabase(string $database): self
    {
        $this->initialized['database'] = true;
        $this->database = $database;
        return $this;
    }
    /**
     * The FQDN pointing to the database cluster's current primary node.
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
    /**
     * The FQDN pointing to the database cluster's current primary node.
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
    /**
     * The port on which the database cluster is listening.
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * The port on which the database cluster is listening.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
    /**
     * The default user for the database.<br><br>Requires `database:view_credentials` scope.
     *
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }
    /**
     * The default user for the database.<br><br>Requires `database:view_credentials` scope.
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
     * The randomly generated password for the default user.<br><br>Requires `database:view_credentials` scope.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * The randomly generated password for the default user.<br><br>Requires `database:view_credentials` scope.
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * A boolean value indicating if the connection should be made over SSL.
     *
     * @return bool
     */
    public function getSsl(): bool
    {
        return $this->ssl;
    }
    /**
     * A boolean value indicating if the connection should be made over SSL.
     *
     * @param bool $ssl
     *
     * @return self
     */
    public function setSsl(bool $ssl): self
    {
        $this->initialized['ssl'] = true;
        $this->ssl = $ssl;
        return $this;
    }
}