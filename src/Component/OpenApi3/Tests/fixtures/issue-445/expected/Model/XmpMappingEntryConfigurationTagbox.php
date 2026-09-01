<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class XmpMappingEntryConfigurationTagbox extends XmpMappingEntryConfigurationBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * IDs of key fields.
     *
     * @var list<string>
     */
    public array $keyFieldIds;
    /**
     * Indicates if lookup shall be performed case sensitive.
     *
     * @var bool
     */
    public bool $caseSensitive;
    /**
     * Indicates if child schemas should also be included.
     *
     * @var bool
     */
    public bool $includeAllSchemaChildren;
    public function definedProperties(): array
    {
        return ['keyFieldIds' => 'keyFieldIds', 'caseSensitive' => 'caseSensitive', 'includeAllSchemaChildren' => 'includeAllSchemaChildren'];
    }
}