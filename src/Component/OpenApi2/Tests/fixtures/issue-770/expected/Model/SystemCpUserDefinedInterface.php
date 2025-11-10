<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemCpUserDefinedInterface
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
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * Physical interface
     *
     * @var string
     */
    protected $physicalInterface;
    /**
     * Service
     *
     * @var string
     */
    protected $service;
    /**
     * IP Address
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * Subnet Mask
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
     * Vlan
     *
     * @var string
     */
    protected $vlan;
    /**
     * Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Physical interface
     *
     * @return string
     */
    public function getPhysicalInterface(): string
    {
        return $this->physicalInterface;
    }
    /**
     * Physical interface
     *
     * @param string $physicalInterface
     *
     * @return self
     */
    public function setPhysicalInterface(string $physicalInterface): self
    {
        $this->initialized['physicalInterface'] = true;
        $this->physicalInterface = $physicalInterface;
        return $this;
    }
    /**
     * Service
     *
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }
    /**
     * Service
     *
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
     * IP Address
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * IP Address
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
     * Subnet Mask
     *
     * @return string
     */
    public function getSubnetMask(): string
    {
        return $this->subnetMask;
    }
    /**
     * Subnet Mask
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
    /**
     * Vlan
     *
     * @return string
     */
    public function getVlan(): string
    {
        return $this->vlan;
    }
    /**
     * Vlan
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