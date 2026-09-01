<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ReservedIpActionType implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the reserved IP.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['type' => 'type'];
    }
}