<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NetworkV6 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The IP address of the IPv6 network interface.
     *
     * @var string
     */
    public string $ipAddress;
    /**
     * The netmask of the IPv6 network interface.
     *
     * @var int
     */
    public int $netmask;
    /**
     * The gateway of the specified IPv6 network interface.
     *
     * @var string
     */
    public string $gateway;
    /**
     * The type of the IPv6 network interface.
     * 
     * **Note**: IPv6 private  networking is not currently supported.
     * 
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['ipAddress' => 'ip_address', 'netmask' => 'netmask', 'gateway' => 'gateway', 'type' => 'type'];
    }
}