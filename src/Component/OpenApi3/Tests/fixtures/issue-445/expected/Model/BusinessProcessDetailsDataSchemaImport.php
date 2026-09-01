<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetailsDataSchemaImport extends BusinessProcessDetailsDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Result information of a schema import operation
     *
     * @var SchemaImportResult|null
     */
    public ?SchemaImportResult $schemaImportResult;
    /**
     * Result information of a list item import operation
     *
     * @var ListItemImportResult|null
     */
    public ?ListItemImportResult $listItemImportResult;
    public function definedProperties(): array
    {
        return ['schemaImportResult' => 'schemaImportResult', 'listItemImportResult' => 'listItemImportResult'];
    }
}