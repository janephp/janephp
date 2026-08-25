<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SinksResponse implements AdditionalPropertiesInterface
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
     * @var Destination
     */
    protected $destination;
    /**
     * List of resources identified by their URNs.
     *
     * @var list<SinkResource>
     */
    protected $resources;
    /**
     * @return Destination
     */
    public function getDestination(): Destination
    {
        return $this->destination;
    }
    /**
     * @param Destination $destination
     *
     * @return self
     */
    public function setDestination(Destination $destination): self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
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
        return ['destination' => ['destination', 'getDestination', 'setDestination'], 'resources' => ['resources', 'getResources', 'setResources']];
    }
}