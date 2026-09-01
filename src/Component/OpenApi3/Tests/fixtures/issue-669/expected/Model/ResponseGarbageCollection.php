<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseGarbageCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GarbageCollection
     */
    public GarbageCollection $garbageCollection;
    public function definedProperties(): array
    {
        return ['garbageCollection' => 'garbage_collection'];
    }
}