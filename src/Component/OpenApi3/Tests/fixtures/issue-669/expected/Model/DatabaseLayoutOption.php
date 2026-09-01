<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseLayoutOption implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $numNodes;
    /**
     * An array of objects containing the slugs available with various node counts
     *
     * @var list<string>
     */
    public array $sizes;
    public function definedProperties(): array
    {
        return ['numNodes' => 'num_nodes', 'sizes' => 'sizes'];
    }
}