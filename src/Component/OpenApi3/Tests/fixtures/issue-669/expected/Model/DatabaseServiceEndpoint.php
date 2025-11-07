<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseServiceEndpoint extends \ArrayObject
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
     * A FQDN pointing to the database cluster's node(s).
     *
     * @var string
     */
    protected $host;
    /**
     * The port on which a service is listening.
     *
     * @var int
     */
    protected $port;
    /**
     * A FQDN pointing to the database cluster's node(s).
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
    /**
     * A FQDN pointing to the database cluster's node(s).
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
     * The port on which a service is listening.
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * The port on which a service is listening.
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
}