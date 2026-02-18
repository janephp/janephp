<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationTacacsServer
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
     * @var string
     */
    protected $service;
    /**
     * @var string
     */
    protected $ip;
    /**
     * Port number of TACACS+ Server object
     *
     * @var int
     */
    protected $port;
    /**
     * Shared secret of TACACS+ Server object
     *
     * @var string
     */
    protected $sharedSecret;
    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }
    /**
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
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
     * Port number of TACACS+ Server object
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * Port number of TACACS+ Server object
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
     * Shared secret of TACACS+ Server object
     *
     * @return string
     */
    public function getSharedSecret(): string
    {
        return $this->sharedSecret;
    }
    /**
     * Shared secret of TACACS+ Server object
     *
     * @param string $sharedSecret
     *
     * @return self
     */
    public function setSharedSecret(string $sharedSecret): self
    {
        $this->initialized['sharedSecret'] = true;
        $this->sharedSecret = $sharedSecret;
        return $this;
    }
}