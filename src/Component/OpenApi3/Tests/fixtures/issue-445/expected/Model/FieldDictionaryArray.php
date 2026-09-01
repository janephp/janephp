<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldDictionaryArray extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    public float $boost = 1;
    /**
     * The maximum number of items that can be stored.
     *
     * @var int|null
     */
    public ?int $maximumItems;
    /**
     * The minimum number of items that must be stored.
     *
     * @var int|null
     */
    public ?int $minimumItems;
    public function definedProperties(): array
    {
        return ['boost' => 'boost', 'maximumItems' => 'maximumItems', 'minimumItems' => 'minimumItems'];
    }
}