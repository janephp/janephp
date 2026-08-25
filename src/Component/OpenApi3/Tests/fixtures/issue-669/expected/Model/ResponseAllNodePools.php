<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAllNodePools implements AdditionalPropertiesInterface
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
     * @var list<array<string, mixed>>
     */
    protected $nodePools;
    /**
     * @return list<array<string, mixed>>
     */
    public function getNodePools(): array
    {
        return $this->nodePools;
    }
    /**
     * @param list<array<string, mixed>> $nodePools
     *
     * @return self
     */
    public function setNodePools(array $nodePools): self
    {
        $this->initialized['nodePools'] = true;
        $this->nodePools = $nodePools;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['nodePools' => ['node_pools', 'getNodePools', 'setNodePools']];
    }
}