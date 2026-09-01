<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldDateTime extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The date time format structure.
     *
     * @var string|null
     */
    public ?string $format;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    public float $boost = 1;
    /**
     * If set to true, the date time value is automatically set when a content or list item is created.
     *
     * @var bool
     */
    public bool $initializeOnItemCreation = false;
    public function definedProperties(): array
    {
        return ['format' => 'format', 'boost' => 'boost', 'initializeOnItemCreation' => 'initializeOnItemCreation'];
    }
}