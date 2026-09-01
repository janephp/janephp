<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $nodes;
    public function definedProperties(): array
    {
        return ['nodes' => 'nodes'];
    }
}