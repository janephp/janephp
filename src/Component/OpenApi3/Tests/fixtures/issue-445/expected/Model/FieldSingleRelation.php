<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldSingleRelation extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the schema used for relation metadata (it must be of type Struct, and it cannot be a system schema).
     *
     * @var string
     */
    public string $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property.
     *
     * @var SchemaIndexingInfo|null
     */
    public ?SchemaIndexingInfo $schemaIndexingInfo;
    /**
     * Defines the allowed elation types.
     *
     * @var list<RelationType>
     */
    public array $relationTypes;
    public function definedProperties(): array
    {
        return ['schemaId' => 'schemaId', 'schemaIndexingInfo' => 'schemaIndexingInfo', 'relationTypes' => 'relationTypes'];
    }
}