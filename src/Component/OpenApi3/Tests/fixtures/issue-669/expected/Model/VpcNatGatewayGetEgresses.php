<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayGetEgresses implements AdditionalPropertiesInterface
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
     * An array of public gateway IP addresses for the VPC NAT gateway.
     *
     * @var list<VpcNatGatewayGetEgressesPublicGatewaysItem>
     */
    protected $publicGateways;
    /**
     * An array of public gateway IP addresses for the VPC NAT gateway.
     *
     * @return list<VpcNatGatewayGetEgressesPublicGatewaysItem>
     */
    public function getPublicGateways(): array
    {
        return $this->publicGateways;
    }
    /**
     * An array of public gateway IP addresses for the VPC NAT gateway.
     *
     * @param list<VpcNatGatewayGetEgressesPublicGatewaysItem> $publicGateways
     *
     * @return self
     */
    public function setPublicGateways(array $publicGateways): self
    {
        $this->initialized['publicGateways'] = true;
        $this->publicGateways = $publicGateways;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['publicGateways' => ['public_gateways', 'getPublicGateways', 'setPublicGateways']];
    }
}