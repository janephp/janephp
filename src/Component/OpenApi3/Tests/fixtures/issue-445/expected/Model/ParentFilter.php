<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ParentFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of the parent document.
     *
     * @var string
     */
    public string $parentType;
    /**
     * The filter to be applied on the child document. All kinds of filters are accepted.
     *
     * @var FilterBase
     */
    public FilterBase $filter;
    public function definedProperties(): array
    {
        return ['parentType' => 'parentType', 'filter' => 'filter'];
    }
}