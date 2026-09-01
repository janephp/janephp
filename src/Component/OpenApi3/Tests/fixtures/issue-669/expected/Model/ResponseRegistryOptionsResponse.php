<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseRegistryOptionsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ResponseRegistryOptionsResponseOptions
     */
    public ResponseRegistryOptionsResponseOptions $options;
    public function definedProperties(): array
    {
        return ['options' => 'options'];
    }
}