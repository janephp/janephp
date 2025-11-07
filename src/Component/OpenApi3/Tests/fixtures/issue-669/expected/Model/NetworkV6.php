<?php

namespace Jane\Generated\DigitalOcean\Model;

class NetworkV6 extends \ArrayObject
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
     * The IP address of the IPv6 network interface.
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * The netmask of the IPv6 network interface.
     *
     * @var int
     */
    protected $netmask;
    /**
     * The gateway of the specified IPv6 network interface.
     *
     * @var string
     */
    protected $gateway;
    /**
     * The type of the IPv6 network interface.
     * 
     * **Note**: IPv6 private  networking is not currently supported.
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * The IP address of the IPv6 network interface.
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * The IP address of the IPv6 network interface.
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
     * The netmask of the IPv6 network interface.
     *
     * @return int
     */
    public function getNetmask(): int
    {
        return $this->netmask;
    }
    /**
     * The netmask of the IPv6 network interface.
     *
     * @param int $netmask
     *
     * @return self
     */
    public function setNetmask(int $netmask): self
    {
        $this->initialized['netmask'] = true;
        $this->netmask = $netmask;
        return $this;
    }
    /**
     * The gateway of the specified IPv6 network interface.
     *
     * @return string
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }
    /**
     * The gateway of the specified IPv6 network interface.
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
     * The type of the IPv6 network interface.
     * 
     * **Note**: IPv6 private  networking is not currently supported.
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the IPv6 network interface.
     **Note**: IPv6 private  networking is not currently supported.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}