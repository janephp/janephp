<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayGetVpcsItem implements AdditionalPropertiesInterface
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
     * The unique identifier of the VPC to which the NAT gateway is attached.
     *
     * @var string
     */
    protected $vpcUuid;
    /**
     * The gateway IP address of the VPC NAT gateway.
     *
     * @var string
     */
    protected $gatewayIp;
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
     * The gateway IP address of the VPC NAT gateway.
     *
     * @return string
     */
    public function getGatewayIp(): string
    {
        return $this->gatewayIp;
    }
    /**
     * The gateway IP address of the VPC NAT gateway.
     *
     * @param string $gatewayIp
     *
     * @return self
     */
    public function setGatewayIp(string $gatewayIp): self
    {
        $this->initialized['gatewayIp'] = true;
        $this->gatewayIp = $gatewayIp;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['vpcUuid' => ['vpc_uuid', 'getVpcUuid', 'setVpcUuid'], 'gatewayIp' => ['gateway_ip', 'getGatewayIp', 'setGatewayIp']];
    }
}