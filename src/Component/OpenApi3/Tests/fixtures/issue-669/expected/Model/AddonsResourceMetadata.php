<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsResourceMetadata implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the metadata item to be set.
     *
     * @var string
     */
    public string $name;
    /**
     * The value to be set for the metadata item, which can be a string or boolean.
     *
     * @var string|bool
     */
    public $value;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'value' => 'value'];
    }
}