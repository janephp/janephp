<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseVersionOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of strings containing the names of available regions
     *
     * @var list<string>
     */
    public array $versions;
    public function definedProperties(): array
    {
        return ['versions' => 'versions'];
    }
}