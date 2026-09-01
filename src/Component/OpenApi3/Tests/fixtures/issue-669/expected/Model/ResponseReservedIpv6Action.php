<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpv6Action implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ResponseReservedIpv6ActionAction
     */
    public ResponseReservedIpv6ActionAction $action;
    public function definedProperties(): array
    {
        return ['action' => 'action'];
    }
}