<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldMultiFieldset extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the schema to be used as fieldset (it must be of type Struct, and it cannot be a system schema).
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
     * The maximum number of items that can be stored.
     *
     * @var int|null
     */
    public ?int $maximumItems;
    /**
     * The minimum number of items that must be stored.
     *
     * @var int|null
     */
    public ?int $minimumItems;
    public function definedProperties(): array
    {
        return ['schemaId' => 'schemaId', 'schemaIndexingInfo' => 'schemaIndexingInfo', 'maximumItems' => 'maximumItems', 'minimumItems' => 'minimumItems'];
    }
}