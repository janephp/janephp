<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $nodes;
    /**
     * @return list<string>
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }
    /**
     * @param list<string> $nodes
     *
     * @return self
     */
    public function setNodes(array $nodes): self
    {
        $this->initialized['nodes'] = true;
        $this->nodes = $nodes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['nodes' => ['nodes', 'getNodes', 'setNodes']];
    }
}