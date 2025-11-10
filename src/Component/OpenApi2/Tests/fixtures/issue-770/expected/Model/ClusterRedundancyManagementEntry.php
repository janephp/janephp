<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterRedundancyManagementEntry
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
     * Management IP
     *
     * @var string
     */
    protected $ip;
    /**
     * Management port
     *
     * @var string
     */
    protected $port;
    /**
     * Management IP
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * Management IP
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * Management port
     *
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }
    /**
     * Management port
     *
     * @param string $port
     *
     * @return self
     */
    public function setPort(string $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
}