<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemStaticRoute
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
     * Network address
     *
     * @var string
     */
    protected $networkAddress;
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
     * Network address
     *
     * @return string
     */
    public function getNetworkAddress(): string
    {
        return $this->networkAddress;
    }
    /**
     * Network address
     *
     * @param string $networkAddress
     *
     * @return self
     */
    public function setNetworkAddress(string $networkAddress): self
    {
        $this->initialized['networkAddress'] = true;
        $this->networkAddress = $networkAddress;
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