<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MetadataValuesSchemaUpdateCommand extends MetadataValuesChangeCommandBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An object containing the metadata values to add / update.
     *
     * @var array<string, mixed>
     */
    public iterable $value;
    public function definedProperties(): array
    {
        return ['value' => 'value'];
    }
}