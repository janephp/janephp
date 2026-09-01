<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SinksResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Destination
     */
    public Destination $destination;
    /**
     * List of resources identified by their URNs.
     *
     * @var list<SinkResource>
     */
    public array $resources;
    public function definedProperties(): array
    {
        return ['destination' => 'destination', 'resources' => 'resources'];
    }
}