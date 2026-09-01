<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidSchemaRegistryConfigPutBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The compatibility level of the schema registry.
     *
     * @var string
     */
    public string $compatibilityLevel;
    public function definedProperties(): array
    {
        return ['compatibilityLevel' => 'compatibility_level'];
    }
}