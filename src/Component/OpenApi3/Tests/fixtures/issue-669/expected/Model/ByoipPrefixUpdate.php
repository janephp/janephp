<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ByoipPrefixUpdate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Whether the BYOIP prefix should be advertised
     *
     * @var bool
     */
    public bool $advertise;
    public function definedProperties(): array
    {
        return ['advertise' => 'advertise'];
    }
}