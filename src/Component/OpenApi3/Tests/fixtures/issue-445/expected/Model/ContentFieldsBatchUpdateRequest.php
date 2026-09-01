<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentFieldsBatchUpdateRequest extends MetadataValuesChangeRequestBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The IDs of the contents whose fields need to be updated.
     *
     * @var list<string>
     */
    public array $contentIds;
    public function definedProperties(): array
    {
        return ['contentIds' => 'contentIds'];
    }
}