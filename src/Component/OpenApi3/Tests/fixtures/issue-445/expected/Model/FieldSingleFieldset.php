<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldSingleFieldset extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the schema to be used as fieldset (it must be of type Struct).
     *
     * @var string
     */
    public string $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @var SchemaIndexingInfo|null
     */
    public ?SchemaIndexingInfo $schemaIndexingInfo;
    public function definedProperties(): array
    {
        return ['schemaId' => 'schemaId', 'schemaIndexingInfo' => 'schemaIndexingInfo'];
    }
}