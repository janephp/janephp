<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SinkResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @var string
     */
    public string $urn;
    /**
     * resource name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['urn' => 'urn', 'name' => 'name'];
    }
}