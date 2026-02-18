<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemSecondaryInterface
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
     * vlan
     *
     * @var string
     */
    protected $vlan;
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
     * vlan
     *
     * @return string
     */
    public function getVlan(): string
    {
        return $this->vlan;
    }
    /**
     * vlan
     *
     * @param string $vlan
     *
     * @return self
     */
    public function setVlan(string $vlan): self
    {
        $this->initialized['vlan'] = true;
        $this->vlan = $vlan;
        return $this;
    }
}