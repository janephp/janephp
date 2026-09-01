<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcNatGatewayGetEgressesPublicGatewaysItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * IPv4 address of the public gateway.
     *
     * @var string
     */
    public string $ipv4;
    public function definedProperties(): array
    {
        return ['ipv4' => 'ipv4'];
    }
}