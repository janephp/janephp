<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemIpv6PrimaryInterface
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
     * IP mode
     *
     * @var string
     */
    protected $ipMode;
    /**
     * IP address
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * Gateway
     *
     * @var string
     */
    protected $gateway;
    /**
     * Primary DNS server
     *
     * @var string
     */
    protected $primaryDNSServer;
    /**
     * Secondary DNS server
     *
     * @var string
     */
    protected $secondaryDNSServer;
    /**
     * IP mode
     *
     * @return string
     */
    public function getIpMode(): string
    {
        return $this->ipMode;
    }
    /**
     * IP mode
     *
     * @param string $ipMode
     *
     * @return self
     */
    public function setIpMode(string $ipMode): self
    {
        $this->initialized['ipMode'] = true;
        $this->ipMode = $ipMode;
        return $this;
    }
    /**
     * IP address
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * IP address
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * Gateway
     *
     * @return string
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }
    /**
     * Gateway
     *
     * @param string $gateway
     *
     * @return self
     */
    public function setGateway(string $gateway): self
    {
        $this->initialized['gateway'] = true;
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * Primary DNS server
     *
     * @return string
     */
    public function getPrimaryDNSServer(): string
    {
        return $this->primaryDNSServer;
    }
    /**
     * Primary DNS server
     *
     * @param string $primaryDNSServer
     *
     * @return self
     */
    public function setPrimaryDNSServer(string $primaryDNSServer): self
    {
        $this->initialized['primaryDNSServer'] = true;
        $this->primaryDNSServer = $primaryDNSServer;
        return $this;
    }
    /**
     * Secondary DNS server
     *
     * @return string
     */
    public function getSecondaryDNSServer(): string
    {
        return $this->secondaryDNSServer;
    }
    /**
     * Secondary DNS server
     *
     * @param string $secondaryDNSServer
     *
     * @return self
     */
    public function setSecondaryDNSServer(string $secondaryDNSServer): self
    {
        $this->initialized['secondaryDNSServer'] = true;
        $this->secondaryDNSServer = $secondaryDNSServer;
        return $this;
    }
}