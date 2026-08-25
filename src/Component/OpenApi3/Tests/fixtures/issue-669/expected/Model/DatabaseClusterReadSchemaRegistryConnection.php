<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseClusterReadSchemaRegistryConnection implements AdditionalPropertiesInterface
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
     * This is provided as a convenience and should be able to be constructed by the other attributes.
     *
     * @var string
     */
    protected $uri;
    /**
     * The FQDN pointing to the schema registry connection uri.
     *
     * @var string
     */
    protected $host;
    /**
     * The port on which the schema registry is listening.
     *
     * @var int
     */
    protected $port;
    /**
     * The default user for the schema registry.<br><br>Requires `database:view_credentials` scope.
     *
     * @var string
     */
    protected $user;
    /**
     * The randomly generated password for the schema registry.<br><br>Requires `database:view_credentials` scope.
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
     * This is provided as a convenience and should be able to be constructed by the other attributes.
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
    /**
     * This is provided as a convenience and should be able to be constructed by the other attributes.
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
     * The FQDN pointing to the schema registry connection uri.
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
    /**
     * The FQDN pointing to the schema registry connection uri.
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
     * The port on which the schema registry is listening.
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * The port on which the schema registry is listening.
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
     * The default user for the schema registry.<br><br>Requires `database:view_credentials` scope.
     *
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }
    /**
     * The default user for the schema registry.<br><br>Requires `database:view_credentials` scope.
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
     * The randomly generated password for the schema registry.<br><br>Requires `database:view_credentials` scope.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * The randomly generated password for the schema registry.<br><br>Requires `database:view_credentials` scope.
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
    public function definedProperties(): array
    {
        return ['uri' => ['uri', 'getUri', 'setUri'], 'host' => ['host', 'getHost', 'setHost'], 'port' => ['port', 'getPort', 'setPort'], 'user' => ['user', 'getUser', 'setUser'], 'password' => ['password', 'getPassword', 'setPassword'], 'ssl' => ['ssl', 'getSsl', 'setSsl']];
    }
}