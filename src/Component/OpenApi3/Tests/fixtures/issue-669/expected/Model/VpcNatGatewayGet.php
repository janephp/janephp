<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayGet implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the VPC NAT gateway. This is automatically generated upon creation.
     *
     * @var string
     */
    public string $id;
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
     * The current state of the VPC NAT gateway.
     *
     * @var string
     */
    public string $state;
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
     * @var list<VpcNatGatewayGetVpcsItem>
     */
    public array $vpcs;
    /**
     * An object containing egress information for the VPC NAT gateway.
     *
     * @var VpcNatGatewayGetEgresses
     */
    public VpcNatGatewayGetEgresses $egresses;
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
    /**
     * A time value given in ISO8601 combined date and time format that represents when the VPC NAT gateway was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the VPC NAT gateway was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'type' => 'type', 'state' => 'state', 'region' => 'region', 'size' => 'size', 'vpcs' => 'vpcs', 'egresses' => 'egresses', 'udpTimeoutSeconds' => 'udp_timeout_seconds', 'icmpTimeoutSeconds' => 'icmp_timeout_seconds', 'tcpTimeoutSeconds' => 'tcp_timeout_seconds', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at'];
    }
}