<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseGarbageCollections extends \ArrayObject
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
     * @var list<GarbageCollection>
     */
    protected $garbageCollections;
    /**
     * @return list<GarbageCollection>
     */
    public function getGarbageCollections(): array
    {
        return $this->garbageCollections;
    }
    /**
     * @param list<GarbageCollection> $garbageCollections
     *
     * @return self
     */
    public function setGarbageCollections(array $garbageCollections): self
    {
        $this->initialized['garbageCollections'] = true;
        $this->garbageCollections = $garbageCollections;
        return $this;
    }
}