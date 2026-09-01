<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SchemaTagboxFilterLookupNamedCacheConfiguration extends NamedCacheConfigurationBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The layer id.
     *
     * @var string|null
     */
    public ?string $schemaId;
    public function definedProperties(): array
    {
        return ['schemaId' => 'schemaId'];
    }
}