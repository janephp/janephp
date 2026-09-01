<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseRegionOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of strings containing the names of available regions
     *
     * @var list<string>
     */
    public array $regions;
    public function definedProperties(): array
    {
        return ['regions' => 'regions'];
    }
}