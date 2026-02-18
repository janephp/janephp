<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonRadiusServerWhenTlsEnabled
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
     * @var int
     */
    protected $port;
    /**
     * @var string
     */
    protected $sharedSecret;
    /**
     * @var string
     */
    protected $ipFqdn;
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
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
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
     * @return string
     */
    public function getSharedSecret(): string
    {
        return $this->sharedSecret;
    }
    /**
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
    /**
     * @return string
     */
    public function getIpFqdn(): string
    {
        return $this->ipFqdn;
    }
    /**
     * @param string $ipFqdn
     *
     * @return self
     */
    public function setIpFqdn(string $ipFqdn): self
    {
        $this->initialized['ipFqdn'] = true;
        $this->ipFqdn = $ipFqdn;
        return $this;
    }
}