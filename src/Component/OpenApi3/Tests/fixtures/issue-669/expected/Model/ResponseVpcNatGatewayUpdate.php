<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseVpcNatGatewayUpdate extends \ArrayObject
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
}