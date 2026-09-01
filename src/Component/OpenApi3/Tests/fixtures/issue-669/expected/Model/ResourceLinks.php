<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResourceLinks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A URI that can be used to retrieve the resource.
     *
     * @var string
     */
    public string $self;
    public function definedProperties(): array
    {
        return ['self' => 'self'];
    }
}