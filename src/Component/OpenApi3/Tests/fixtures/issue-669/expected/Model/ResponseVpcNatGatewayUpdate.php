<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVpcNatGatewayUpdate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var VpcNatGatewayUpdate
     */
    public VpcNatGatewayUpdate $vpcNatGateway;
    public function definedProperties(): array
    {
        return ['vpcNatGateway' => 'vpc_nat_gateway'];
    }
}