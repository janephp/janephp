<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVpcNatGatewayUpdate implements AdditionalPropertiesInterface
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
     * @var VpcNatGatewayUpdate
     */
    protected $vpcNatGateway;
    /**
     * @return VpcNatGatewayUpdate
     */
    public function getVpcNatGateway(): VpcNatGatewayUpdate
    {
        return $this->vpcNatGateway;
    }
    /**
     * @param VpcNatGatewayUpdate $vpcNatGateway
     *
     * @return self
     */
    public function setVpcNatGateway(VpcNatGatewayUpdate $vpcNatGateway): self
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