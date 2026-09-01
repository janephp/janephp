<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MetadataValuesSchemaItemAddCommand extends MetadataValuesChangeCommandBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The path of the field relative to the Content or Layer schema values defined by the schemaId property.
     * (i.e. add a team (existing list item) to the work information of a person: fieldPath = "workInfo.teams", schemaId = "PersonLayer").
     *
     * @var string
     */
    public string $fieldPath;
    /**
     * The field namespace
     *
     * @var string
     */
    public string $fieldNamespace;
    /**
     * The ID of the list item to be added.
     *
     * @var string
     */
    public string $referenceId;
    public function definedProperties(): array
    {
        return ['fieldPath' => 'fieldPath', 'fieldNamespace' => 'fieldNamespace', 'referenceId' => 'referenceId'];
    }
}