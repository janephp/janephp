<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OptionsOptionsRedis implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of strings containing the names of available regions
     *
     * @var list<string>
     */
    public array $regions;
    /**
     * An array of strings containing the names of available regions
     *
     * @var list<string>
     */
    public array $versions;
    /**
     * An array of objects, each indicating the node sizes (otherwise referred to as slugs) that are available with various numbers of nodes in the database cluster. Each slugs denotes the node's identifier, CPU, and RAM (in that order).
     *
     * @var list<DatabaseLayoutOption>
     */
    public array $layouts;
    public function definedProperties(): array
    {
        return ['regions' => 'regions', 'versions' => 'versions', 'layouts' => 'layouts'];
    }
}