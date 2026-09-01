<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ListItemNamedCacheConfiguration extends NamedCacheConfigurationBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of the schema to cache (should have SchemaType = List)
     *
     * @var string|null
     */
    public ?string $schemaId;
    /**
     * List of IDs of fields to use as a composite key
     *
     * @var list<string>|null
     */
    public ?array $keyFields;
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
        return ['schemaId' => 'schemaId', 'keyFields' => 'keyFields', 'filter' => 'filter', 'includeAllSchemaChildren' => 'includeAllSchemaChildren'];
    }
}