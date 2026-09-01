<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ReservedIpv6ActionType implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the reserved IPv6.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['type' => 'type'];
    }
}