<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ChildFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of the child document.
     *
     * @var string
     */
    public string $childType;
    /**
     * The filter to be applied on the child document. All kinds of filters are accepted.
     *
     * @var FilterBase
     */
    public FilterBase $filter;
    public function definedProperties(): array
    {
        return ['childType' => 'childType', 'filter' => 'filter'];
    }
}