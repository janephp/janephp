<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseGarbageCollections implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<GarbageCollection>
     */
    public array $garbageCollections;
    public function definedProperties(): array
    {
        return ['garbageCollections' => 'garbage_collections'];
    }
}