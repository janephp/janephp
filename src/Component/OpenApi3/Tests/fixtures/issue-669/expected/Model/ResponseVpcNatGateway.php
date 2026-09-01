<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVpcNatGateway implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var VpcNatGatewayGet
     */
    public VpcNatGatewayGet $vpcNatGateway;
    public function definedProperties(): array
    {
        return ['vpcNatGateway' => 'vpc_nat_gateway'];
    }
}