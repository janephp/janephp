<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NotFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The filter to be negated.
     *
     * @var FilterBase
     */
    public FilterBase $filter;
    public function definedProperties(): array
    {
        return ['filter' => 'filter'];
    }
}