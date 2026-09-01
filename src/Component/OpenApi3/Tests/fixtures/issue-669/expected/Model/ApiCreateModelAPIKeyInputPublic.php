<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateModelAPIKeyInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A human friendly name to identify the key
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['name' => 'name'];
    }
}