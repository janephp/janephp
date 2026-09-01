<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpv6 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ReservedIpv6
     */
    public ReservedIpv6 $reservedIpv6;
    public function definedProperties(): array
    {
        return ['reservedIpv6' => 'reserved_ipv6'];
    }
}