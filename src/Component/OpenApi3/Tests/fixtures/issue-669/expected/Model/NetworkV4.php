<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NetworkV4 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The IP address of the IPv4 network interface.
     *
     * @var string
     */
    public string $ipAddress;
    /**
     * The netmask of the IPv4 network interface.
     *
     * @var string
     */
    public string $netmask;
    /**
     * The gateway of the specified IPv4 network interface.
     * 
     * For private interfaces, a gateway is not provided. This is denoted by
     * returning `nil` as its value.
     * 
     *
     * @var string
     */
    public string $gateway;
    /**
     * The type of the IPv4 network interface.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['ipAddress' => 'ip_address', 'netmask' => 'netmask', 'gateway' => 'gateway', 'type' => 'type'];
    }
}