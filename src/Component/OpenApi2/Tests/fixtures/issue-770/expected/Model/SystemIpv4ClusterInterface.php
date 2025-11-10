<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemIpv4ClusterInterface
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
     * Subnet mask
     *
     * @var string
     */
    protected $subnetMask;
    /**
     * Gateway
     *
     * @var string
     */
    protected $gateway;
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
     * Subnet mask
     *
     * @return string
     */
    public function getSubnetMask(): string
    {
        return $this->subnetMask;
    }
    /**
     * Subnet mask
     *
     * @param string $subnetMask
     *
     * @return self
     */
    public function setSubnetMask(string $subnetMask): self
    {
        $this->initialized['subnetMask'] = true;
        $this->subnetMask = $subnetMask;
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
}