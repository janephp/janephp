<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpv6Create implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ResponseReservedIpv6CreateReservedIpv6
     */
    public ResponseReservedIpv6CreateReservedIpv6 $reservedIpv6;
    public function definedProperties(): array
    {
        return ['reservedIpv6' => 'reserved_ipv6'];
    }
}