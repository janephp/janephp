<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OrFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The filters to put in "or". All kinds of filters are accepted.
     *
     * @var list<FilterBase>|null
     */
    public ?array $filters;
    public function definedProperties(): array
    {
        return ['filters' => 'filters'];
    }
}