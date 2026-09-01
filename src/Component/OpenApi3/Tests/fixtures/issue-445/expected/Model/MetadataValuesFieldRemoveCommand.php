<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MetadataValuesFieldRemoveCommand extends MetadataValuesChangeCommandBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The path of the field to be removed within the specified schema (i.e. remove the street from the address of a person: fieldPath = "address.streetName", schemaId = "PersonLayer")
     *
     * @var string
     */
    public string $fieldPath;
    public function definedProperties(): array
    {
        return ['fieldPath' => 'fieldPath'];
    }
}