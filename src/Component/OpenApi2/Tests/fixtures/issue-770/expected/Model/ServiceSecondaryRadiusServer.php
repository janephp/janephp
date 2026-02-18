<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceSecondaryRadiusServer
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
     * Automatic fallback enabled or disabled
     *
     * @var bool
     */
    protected $autoFallbackDisable;
    /**
     * @var string
     */
    protected $ip;
    /**
     * RADIUS server port
     *
     * @var int
     */
    protected $port = 1812;
    /**
     * RADIUS server shared secret
     *
     * @var string
     */
    protected $sharedSecret;
    /**
     * RADIUS server IP address or FQDN
     *
     * @var string
     */
    protected $ipFqdn;
    /**
     * Automatic fallback enabled or disabled
     *
     * @return bool
     */
    public function getAutoFallbackDisable(): bool
    {
        return $this->autoFallbackDisable;
    }
    /**
     * Automatic fallback enabled or disabled
     *
     * @param bool $autoFallbackDisable
     *
     * @return self
     */
    public function setAutoFallbackDisable(bool $autoFallbackDisable): self
    {
        $this->initialized['autoFallbackDisable'] = true;
        $this->autoFallbackDisable = $autoFallbackDisable;
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
     * RADIUS server port
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * RADIUS server port
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
     * RADIUS server shared secret
     *
     * @return string
     */
    public function getSharedSecret(): string
    {
        return $this->sharedSecret;
    }
    /**
     * RADIUS server shared secret
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
    /**
     * RADIUS server IP address or FQDN
     *
     * @return string
     */
    public function getIpFqdn(): string
    {
        return $this->ipFqdn;
    }
    /**
     * RADIUS server IP address or FQDN
     *
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