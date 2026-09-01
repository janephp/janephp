<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentFieldsBatchUpdateFilterRequest extends MetadataValuesChangeRequestBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Filters the contents on which the change commands must be applied.
     *
     * @var ContentFilterRequest
     */
    public ContentFilterRequest $filterRequest;
    public function definedProperties(): array
    {
        return ['filterRequest' => 'filterRequest'];
    }
}