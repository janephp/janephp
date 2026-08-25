<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingNodePool implements AdditionalPropertiesInterface
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
     * @var array<string, mixed>
     */
    protected $nodePool;
    /**
     * @return array<string, mixed>
     */
    public function getNodePool(): iterable
    {
        return $this->nodePool;
    }
    /**
     * @param array<string, mixed> $nodePool
     *
     * @return self
     */
    public function setNodePool(iterable $nodePool): self
    {
        $this->initialized['nodePool'] = true;
        $this->nodePool = $nodePool;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['nodePool' => ['node_pool', 'getNodePool', 'setNodePool']];
    }
}