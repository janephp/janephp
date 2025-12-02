<?php

namespace Jane\Generated\DigitalOcean\Model;

class VpcNatGatewayCreateVpcsItem extends \ArrayObject
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
     * The unique identifier of the VPC to which the NAT gateway is attached.
     *
     * @var string
     */
    protected $vpcUuid;
    /**
     * The classification of the NAT gateway as the default egress route for the VPC traffic.
     *
     * @var bool
     */
    protected $defaultGateway;
    /**
     * The unique identifier of the VPC to which the NAT gateway is attached.
     *
     * @return string
     */
    public function getVpcUuid(): string
    {
        return $this->vpcUuid;
    }
    /**
     * The unique identifier of the VPC to which the NAT gateway is attached.
     *
     * @param string $vpcUuid
     *
     * @return self
     */
    public function setVpcUuid(string $vpcUuid): self
    {
        $this->initialized['vpcUuid'] = true;
        $this->vpcUuid = $vpcUuid;
        return $this;
    }
    /**
     * The classification of the NAT gateway as the default egress route for the VPC traffic.
     *
     * @return bool
     */
    public function getDefaultGateway(): bool
    {
        return $this->defaultGateway;
    }
    /**
     * The classification of the NAT gateway as the default egress route for the VPC traffic.
     *
     * @param bool $defaultGateway
     *
     * @return self
     */
    public function setDefaultGateway(bool $defaultGateway): self
    {
        $this->initialized['defaultGateway'] = true;
        $this->defaultGateway = $defaultGateway;
        return $this;
    }
}