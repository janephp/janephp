<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayUpdateVpcsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier of the VPC to which the NAT gateway is attached.
     *
     * @var string
     */
    public string $vpcUuid;
    /**
     * The classification of the NAT gateway as the default egress route for the VPC traffic.
     *
     * @var bool
     */
    public bool $defaultGateway;
    public function definedProperties(): array
    {
        return ['vpcUuid' => 'vpc_uuid', 'defaultGateway' => 'default_gateway'];
    }
}