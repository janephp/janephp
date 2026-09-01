<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NeighborIds implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of arrays. Each array will contain a set of Droplet IDs for Droplets that share a physical server.
     *
     * @var list<list<int>>
     */
    public array $neighborIds;
    public function definedProperties(): array
    {
        return ['neighborIds' => 'neighbor_ids'];
    }
}