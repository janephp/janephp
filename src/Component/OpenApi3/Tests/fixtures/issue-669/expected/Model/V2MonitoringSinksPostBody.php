<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2MonitoringSinksPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A unique identifier for an already-existing destination.
     *
     * @var string
     */
    protected $destinationUuid;
    /**
     * List of resources identified by their URNs.
     *
     * @var list<SinkResource>
     */
    protected $resources;
    /**
     * A unique identifier for an already-existing destination.
     *
     * @return string
     */
    public function getDestinationUuid(): string
    {
        return $this->destinationUuid;
    }
    /**
     * A unique identifier for an already-existing destination.
     *
     * @param string $destinationUuid
     *
     * @return self
     */
    public function setDestinationUuid(string $destinationUuid): self
    {
        $this->initialized['destinationUuid'] = true;
        $this->destinationUuid = $destinationUuid;
        return $this;
    }
    /**
     * List of resources identified by their URNs.
     *
     * @return list<SinkResource>
     */
    public function getResources(): array
    {
        return $this->resources;
    }
    /**
     * List of resources identified by their URNs.
     *
     * @param list<SinkResource> $resources
     *
     * @return self
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['destinationUuid' => ['destination_uuid', 'getDestinationUuid', 'setDestinationUuid'], 'resources' => ['resources', 'getResources', 'setResources']];
    }
}