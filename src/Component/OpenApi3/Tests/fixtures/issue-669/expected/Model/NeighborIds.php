<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NeighborIds implements AdditionalPropertiesInterface
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
     * An array of arrays. Each array will contain a set of Droplet IDs for Droplets that share a physical server.
     *
     * @var list<list<int>>
     */
    protected $neighborIds;
    /**
     * An array of arrays. Each array will contain a set of Droplet IDs for Droplets that share a physical server.
     *
     * @return list<list<int>>
     */
    public function getNeighborIds(): array
    {
        return $this->neighborIds;
    }
    /**
     * An array of arrays. Each array will contain a set of Droplet IDs for Droplets that share a physical server.
     *
     * @param list<list<int>> $neighborIds
     *
     * @return self
     */
    public function setNeighborIds(array $neighborIds): self
    {
        $this->initialized['neighborIds'] = true;
        $this->neighborIds = $neighborIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['neighborIds' => ['neighbor_ids', 'getNeighborIds', 'setNeighborIds']];
    }
}