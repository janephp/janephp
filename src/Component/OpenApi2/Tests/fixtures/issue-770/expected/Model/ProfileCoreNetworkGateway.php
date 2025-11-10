<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCoreNetworkGateway
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
     * Primary Gateway
     *
     * @var string
     */
    protected $primaryGateway;
    /**
     * Secondary Gateway
     *
     * @var string
     */
    protected $secondaryGateway;
    /**
     * Gateway path MTU
     *
     * @var string
     */
    protected $tunnelMTU;
    /**
     * Manual setting value of Gateway path MTU
     *
     * @var int
     */
    protected $tunnelMTUSize = 1500;
    /**
     * ICMP Keep-Alive Period(secs)
     *
     * @var int
     */
    protected $keepAlivePeriod = 10;
    /**
     * ICMP Keep-Alive Retry
     *
     * @var int
     */
    protected $keepAliveRetry = 3;
    /**
     * Primary Gateway
     *
     * @return string
     */
    public function getPrimaryGateway(): string
    {
        return $this->primaryGateway;
    }
    /**
     * Primary Gateway
     *
     * @param string $primaryGateway
     *
     * @return self
     */
    public function setPrimaryGateway(string $primaryGateway): self
    {
        $this->initialized['primaryGateway'] = true;
        $this->primaryGateway = $primaryGateway;
        return $this;
    }
    /**
     * Secondary Gateway
     *
     * @return string
     */
    public function getSecondaryGateway(): string
    {
        return $this->secondaryGateway;
    }
    /**
     * Secondary Gateway
     *
     * @param string $secondaryGateway
     *
     * @return self
     */
    public function setSecondaryGateway(string $secondaryGateway): self
    {
        $this->initialized['secondaryGateway'] = true;
        $this->secondaryGateway = $secondaryGateway;
        return $this;
    }
    /**
     * Gateway path MTU
     *
     * @return string
     */
    public function getTunnelMTU(): string
    {
        return $this->tunnelMTU;
    }
    /**
     * Gateway path MTU
     *
     * @param string $tunnelMTU
     *
     * @return self
     */
    public function setTunnelMTU(string $tunnelMTU): self
    {
        $this->initialized['tunnelMTU'] = true;
        $this->tunnelMTU = $tunnelMTU;
        return $this;
    }
    /**
     * Manual setting value of Gateway path MTU
     *
     * @return int
     */
    public function getTunnelMTUSize(): int
    {
        return $this->tunnelMTUSize;
    }
    /**
     * Manual setting value of Gateway path MTU
     *
     * @param int $tunnelMTUSize
     *
     * @return self
     */
    public function setTunnelMTUSize(int $tunnelMTUSize): self
    {
        $this->initialized['tunnelMTUSize'] = true;
        $this->tunnelMTUSize = $tunnelMTUSize;
        return $this;
    }
    /**
     * ICMP Keep-Alive Period(secs)
     *
     * @return int
     */
    public function getKeepAlivePeriod(): int
    {
        return $this->keepAlivePeriod;
    }
    /**
     * ICMP Keep-Alive Period(secs)
     *
     * @param int $keepAlivePeriod
     *
     * @return self
     */
    public function setKeepAlivePeriod(int $keepAlivePeriod): self
    {
        $this->initialized['keepAlivePeriod'] = true;
        $this->keepAlivePeriod = $keepAlivePeriod;
        return $this;
    }
    /**
     * ICMP Keep-Alive Retry
     *
     * @return int
     */
    public function getKeepAliveRetry(): int
    {
        return $this->keepAliveRetry;
    }
    /**
     * ICMP Keep-Alive Retry
     *
     * @param int $keepAliveRetry
     *
     * @return self
     */
    public function setKeepAliveRetry(int $keepAliveRetry): self
    {
        $this->initialized['keepAliveRetry'] = true;
        $this->keepAliveRetry = $keepAliveRetry;
        return $this;
    }
}