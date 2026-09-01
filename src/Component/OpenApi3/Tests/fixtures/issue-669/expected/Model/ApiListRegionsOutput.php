<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListRegionsOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Region code
     *
     * @var list<GenaiapiRegion>
     */
    public array $regions;
    public function definedProperties(): array
    {
        return ['regions' => 'regions'];
    }
}