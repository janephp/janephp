<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayGetEgressesPublicGatewaysItem implements AdditionalPropertiesInterface
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
     * IPv4 address of the public gateway.
     *
     * @var string
     */
    protected $ipv4;
    /**
     * IPv4 address of the public gateway.
     *
     * @return string
     */
    public function getIpv4(): string
    {
        return $this->ipv4;
    }
    /**
     * IPv4 address of the public gateway.
     *
     * @param string $ipv4
     *
     * @return self
     */
    public function setIpv4(string $ipv4): self
    {
        $this->initialized['ipv4'] = true;
        $this->ipv4 = $ipv4;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['ipv4' => ['ipv4', 'getIpv4', 'setIpv4']];
    }
}