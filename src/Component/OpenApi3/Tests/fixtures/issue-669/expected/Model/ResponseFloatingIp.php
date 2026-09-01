<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseFloatingIp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var FloatingIp
     */
    public FloatingIp $floatingIp;
    public function definedProperties(): array
    {
        return ['floatingIp' => 'floating_ip'];
    }
}