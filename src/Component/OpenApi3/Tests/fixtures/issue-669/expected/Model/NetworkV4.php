<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NetworkV4 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The IP address of the IPv4 network interface.
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * The netmask of the IPv4 network interface.
     *
     * @var string
     */
    protected $netmask;
    /**
     * The gateway of the specified IPv4 network interface.
     * 
     * For private interfaces, a gateway is not provided. This is denoted by
     * returning `nil` as its value.
     * 
     *
     * @var string
     */
    protected $gateway;
    /**
     * The type of the IPv4 network interface.
     *
     * @var string
     */
    protected $type;
    /**
     * The IP address of the IPv4 network interface.
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * The IP address of the IPv4 network interface.
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
     * The netmask of the IPv4 network interface.
     *
     * @return string
     */
    public function getNetmask(): string
    {
        return $this->netmask;
    }
    /**
     * The netmask of the IPv4 network interface.
     *
     * @param string $netmask
     *
     * @return self
     */
    public function setNetmask(string $netmask): self
    {
        $this->initialized['netmask'] = true;
        $this->netmask = $netmask;
        return $this;
    }
    /**
     * The gateway of the specified IPv4 network interface.
     * 
     * For private interfaces, a gateway is not provided. This is denoted by
     * returning `nil` as its value.
     * 
     *
     * @return string
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }
    /**
    * The gateway of the specified IPv4 network interface.
    
    For private interfaces, a gateway is not provided. This is denoted by
    returning `nil` as its value.
    
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
     * The type of the IPv4 network interface.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the IPv4 network interface.
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
    public function definedProperties(): array
    {
        return ['ipAddress' => ['ip_address', 'getIpAddress', 'setIpAddress'], 'netmask' => ['netmask', 'getNetmask', 'setNetmask'], 'gateway' => ['gateway', 'getGateway', 'setGateway'], 'type' => ['type', 'getType', 'setType']];
    }
}