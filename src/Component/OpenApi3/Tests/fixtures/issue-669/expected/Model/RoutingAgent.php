<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RoutingAgent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates whether the routing-agent component is enabled.
     *
     * @var bool
     */
    public bool $enabled;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled'];
    }
}