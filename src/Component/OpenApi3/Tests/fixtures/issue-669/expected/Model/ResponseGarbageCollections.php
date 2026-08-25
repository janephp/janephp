<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseGarbageCollections implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['garbageCollections' => ['garbage_collections', 'getGarbageCollections', 'setGarbageCollections']];
    }
}