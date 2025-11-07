<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseNodePoolUpdate extends \ArrayObject
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
}