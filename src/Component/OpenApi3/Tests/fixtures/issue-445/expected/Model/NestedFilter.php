<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NestedFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The path pointing to the nested document (i.e. personLayer.nestedAddress).
     *
     * @var string
     */
    public string $path;
    /**
     * The filter to be applied on the nested documents.
     *
     * @var FilterBase
     */
    public FilterBase $filter;
    public function definedProperties(): array
    {
        return ['path' => 'path', 'filter' => 'filter'];
    }
}