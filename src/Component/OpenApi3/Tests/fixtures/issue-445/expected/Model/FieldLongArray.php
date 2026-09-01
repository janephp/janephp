<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldLongArray extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The long pattern structure.
     *
     * @var string|null
     */
    public ?string $pattern;
    /**
     * The minimum possible value.
     *
     * @var float|null
     */
    public ?float $minimum;
    /**
     * The maximum possible value.
     *
     * @var float|null
     */
    public ?float $maximum;
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
        return ['pattern' => 'pattern', 'minimum' => 'minimum', 'maximum' => 'maximum', 'boost' => 'boost', 'maximumItems' => 'maximumItems', 'minimumItems' => 'minimumItems'];
    }
}