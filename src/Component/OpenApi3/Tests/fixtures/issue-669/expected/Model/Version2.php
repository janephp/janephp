<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Version2 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A string representing the version of the database engine in use for the cluster.
     *
     * @var string
     */
    public string $version;
    public function definedProperties(): array
    {
        return ['version' => 'version'];
    }
}