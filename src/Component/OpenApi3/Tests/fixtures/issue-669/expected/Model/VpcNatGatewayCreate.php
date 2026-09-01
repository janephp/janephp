<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The human-readable name of the VPC NAT gateway.
     *
     * @var string
     */
    public string $name;
    /**
     * The type of the VPC NAT gateway.
     *
     * @var string
     */
    public string $type;
    /**
     * The region in which the VPC NAT gateway is created.
     *
     * @var string
     */
    public string $region;
    /**
     * The size of the VPC NAT gateway.
     *
     * @var int
     */
    public int $size;
    /**
     * An array of VPCs associated with the VPC NAT gateway.
     *
     * @var list<VpcNatGatewayCreateVpcsItem>
     */
    public array $vpcs;
    /**
     * The UDP timeout in seconds for the VPC NAT gateway.
     *
     * @var int
     */
    public int $udpTimeoutSeconds;
    /**
     * The ICMP timeout in seconds for the VPC NAT gateway.
     *
     * @var int
     */
    public int $icmpTimeoutSeconds;
    /**
     * The TCP timeout in seconds for the VPC NAT gateway.
     *
     * @var int
     */
    public int $tcpTimeoutSeconds;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'type' => 'type', 'region' => 'region', 'size' => 'size', 'vpcs' => 'vpcs', 'udpTimeoutSeconds' => 'udp_timeout_seconds', 'icmpTimeoutSeconds' => 'icmp_timeout_seconds', 'tcpTimeoutSeconds' => 'tcp_timeout_seconds'];
    }
}