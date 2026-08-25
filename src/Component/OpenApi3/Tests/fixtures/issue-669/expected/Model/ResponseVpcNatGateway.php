<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVpcNatGateway implements AdditionalPropertiesInterface
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
     * @var VpcNatGatewayGet
     */
    protected $vpcNatGateway;
    /**
     * @return VpcNatGatewayGet
     */
    public function getVpcNatGateway(): VpcNatGatewayGet
    {
        return $this->vpcNatGateway;
    }
    /**
     * @param VpcNatGatewayGet $vpcNatGateway
     *
     * @return self
     */
    public function setVpcNatGateway(VpcNatGatewayGet $vpcNatGateway): self
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