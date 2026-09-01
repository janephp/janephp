<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseByoipPrefixUpdate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ByoipPrefix
     */
    public ByoipPrefix $byoipPrefix;
    public function definedProperties(): array
    {
        return ['byoipPrefix' => 'byoip_prefix'];
    }
}