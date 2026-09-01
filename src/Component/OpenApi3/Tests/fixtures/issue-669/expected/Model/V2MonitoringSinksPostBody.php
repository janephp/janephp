<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2MonitoringSinksPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identifier for an already-existing destination.
     *
     * @var string
     */
    public string $destinationUuid;
    /**
     * List of resources identified by their URNs.
     *
     * @var list<SinkResource>
     */
    public array $resources;
    public function definedProperties(): array
    {
        return ['destinationUuid' => 'destination_uuid', 'resources' => 'resources'];
    }
}