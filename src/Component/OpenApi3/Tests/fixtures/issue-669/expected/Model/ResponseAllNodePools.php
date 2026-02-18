<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAllNodePools extends \ArrayObject
{
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
}