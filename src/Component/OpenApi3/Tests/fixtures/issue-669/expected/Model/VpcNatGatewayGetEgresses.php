<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayGetEgresses implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of public gateway IP addresses for the VPC NAT gateway.
     *
     * @var list<VpcNatGatewayGetEgressesPublicGatewaysItem>
     */
    public array $publicGateways;
    public function definedProperties(): array
    {
        return ['publicGateways' => 'public_gateways'];
    }
}