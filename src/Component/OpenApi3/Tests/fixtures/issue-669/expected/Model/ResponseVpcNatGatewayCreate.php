<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVpcNatGatewayCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var VpcNatGatewayCreate
     */
    public VpcNatGatewayCreate $vpcNatGateway;
    public function definedProperties(): array
    {
        return ['vpcNatGateway' => 'vpc_nat_gateway'];
    }
}