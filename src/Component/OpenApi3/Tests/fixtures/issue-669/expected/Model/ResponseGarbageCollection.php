<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseGarbageCollection implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['garbageCollection' => ['garbage_collection', 'getGarbageCollection', 'setGarbageCollection']];
    }
}