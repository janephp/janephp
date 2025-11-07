<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseGarbageCollection extends \ArrayObject
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
     * @var GarbageCollection
     */
    protected $garbageCollection;
    /**
     * @return GarbageCollection
     */
    public function getGarbageCollection(): GarbageCollection
    {
        return $this->garbageCollection;
    }
    /**
     * @param GarbageCollection $garbageCollection
     *
     * @return self
     */
    public function setGarbageCollection(GarbageCollection $garbageCollection): self
    {
        $this->initialized['garbageCollection'] = true;
        $this->garbageCollection = $garbageCollection;
        return $this;
    }
}