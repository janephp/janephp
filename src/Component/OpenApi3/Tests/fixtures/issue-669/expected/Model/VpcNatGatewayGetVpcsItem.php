<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayGetVpcsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier of the VPC to which the NAT gateway is attached.
     *
     * @var string
     */
    public string $vpcUuid;
    /**
     * The gateway IP address of the VPC NAT gateway.
     *
     * @var string
     */
    public string $gatewayIp;
    public function definedProperties(): array
    {
        return ['vpcUuid' => 'vpc_uuid', 'gatewayIp' => 'gateway_ip'];
    }
}