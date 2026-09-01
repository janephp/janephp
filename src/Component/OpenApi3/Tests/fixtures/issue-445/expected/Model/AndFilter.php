<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AndFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The filters to put in "and". All kinds of filters are accepted.
     *
     * @var list<FilterBase>|null
     */
    public ?array $filters;
    public function definedProperties(): array
    {
        return ['filters' => 'filters'];
    }
}