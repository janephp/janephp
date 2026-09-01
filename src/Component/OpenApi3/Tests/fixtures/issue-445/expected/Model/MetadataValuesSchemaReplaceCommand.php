<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MetadataValuesSchemaReplaceCommand extends MetadataValuesChangeCommandBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An object containing the metadata values for the schema. The existing dictionary will be entirely overwritten.
     *
     * @var array<string, mixed>
     */
    public iterable $value;
    public function definedProperties(): array
    {
        return ['value' => 'value'];
    }
}