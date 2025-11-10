<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonRadiusServer
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
    protected $ip;
    /**
     * Server port
     *
     * @var int
     */
    protected $port;
    /**
     * Server shared secret
     *
     * @var string
     */
    protected $sharedSecret;
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
     * Server port
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * Server port
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
     * Server shared secret
     *
     * @return string
     */
    public function getSharedSecret(): string
    {
        return $this->sharedSecret;
    }
    /**
     * Server shared secret
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