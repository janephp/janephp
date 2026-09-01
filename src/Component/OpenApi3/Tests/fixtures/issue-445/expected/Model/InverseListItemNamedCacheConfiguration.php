<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class InverseListItemNamedCacheConfiguration extends NamedCacheConfigurationBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of the schema to cache (should have SchemaType = List)
     *
     * @var string|null
     */
    public ?string $schemaId;
    /**
     * ID of the field that yields the value
     *
     * @var string|null
     */
    public ?string $valueField;
    /**
     * An optional filter to narrow down the cached list items
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Include child schemas when caching list items
     *
     * @var bool
     */
    public bool $includeAllSchemaChildren;
    public function definedProperties(): array
    {
        return ['schemaId' => 'schemaId', 'valueField' => 'valueField', 'filter' => 'filter', 'includeAllSchemaChildren' => 'includeAllSchemaChildren'];
    }
}