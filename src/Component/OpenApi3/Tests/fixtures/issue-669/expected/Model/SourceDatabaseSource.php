<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SourceDatabaseSource implements AdditionalPropertiesInterface
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
     * The name of the default database.
     *
     * @var string
     */
    protected $dbname;
    /**
     * The default user for the database.
     *
     * @var string
     */
    protected $username;
    /**
     * The randomly generated password for the default user.
     *
     * @var string
     */
    protected $password;
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
     * The name of the default database.
     *
     * @return string
     */
    public function getDbname(): string
    {
        return $this->dbname;
    }
    /**
     * The name of the default database.
     *
     * @param string $dbname
     *
     * @return self
     */
    public function setDbname(string $dbname): self
    {
        $this->initialized['dbname'] = true;
        $this->dbname = $dbname;
        return $this;
    }
    /**
     * The default user for the database.
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * The default user for the database.
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    /**
     * The randomly generated password for the default user.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * The randomly generated password for the default user.
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
    public function definedProperties(): array
    {
        return ['host' => ['host', 'getHost', 'setHost'], 'port' => ['port', 'getPort', 'setPort'], 'dbname' => ['dbname', 'getDbname', 'setDbname'], 'username' => ['username', 'getUsername', 'setUsername'], 'password' => ['password', 'getPassword', 'setPassword']];
    }
}