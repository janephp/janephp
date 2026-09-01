<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ReservedIp
     */
    public ReservedIp $reservedIp;
    public function definedProperties(): array
    {
        return ['reservedIp' => 'reserved_ip'];
    }
}