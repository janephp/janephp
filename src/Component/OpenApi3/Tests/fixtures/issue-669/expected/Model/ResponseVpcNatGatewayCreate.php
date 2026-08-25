<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVpcNatGatewayCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var VpcNatGatewayCreate
     */
    protected $vpcNatGateway;
    /**
     * @return VpcNatGatewayCreate
     */
    public function getVpcNatGateway(): VpcNatGatewayCreate
    {
        return $this->vpcNatGateway;
    }
    /**
     * @param VpcNatGatewayCreate $vpcNatGateway
     *
     * @return self
     */
    public function setVpcNatGateway(VpcNatGatewayCreate $vpcNatGateway): self
    {
        $this->initialized['vpcNatGateway'] = true;
        $this->vpcNatGateway = $vpcNatGateway;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['vpcNatGateway' => ['vpc_nat_gateway', 'getVpcNatGateway', 'setVpcNatGateway']];
    }
}