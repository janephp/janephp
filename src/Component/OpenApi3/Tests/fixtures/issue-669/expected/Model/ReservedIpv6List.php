<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ReservedIpv6List implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ReservedIpv6ListReservedIpv6sItem>
     */
    public array $reservedIpv6s;
    public function definedProperties(): array
    {
        return ['reservedIpv6s' => 'reserved_ipv6s'];
    }
}