<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MetaOptionalTotal implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Information about the response itself.
     *
     * @var MetaProperties
     */
    public MetaProperties $meta;
    public function definedProperties(): array
    {
        return ['meta' => 'meta'];
    }
}