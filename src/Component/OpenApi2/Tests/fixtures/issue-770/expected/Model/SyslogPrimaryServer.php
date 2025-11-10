<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SyslogPrimaryServer
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
     * address of the syslog server.
     *
     * @var string
     */
    protected $host;
    /**
     * port number of the syslog server
     *
     * @var int
     */
    protected $port;
    /**
     * protocol of the syslog server
     *
     * @var string
     */
    protected $protocol;
    /**
     * address of the syslog server.
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
    /**
     * address of the syslog server.
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
     * port number of the syslog server
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * port number of the syslog server
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
     * protocol of the syslog server
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * protocol of the syslog server
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
}