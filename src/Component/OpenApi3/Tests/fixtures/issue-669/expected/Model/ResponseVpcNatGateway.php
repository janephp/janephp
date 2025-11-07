<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseVpcNatGateway extends \ArrayObject
{
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
}