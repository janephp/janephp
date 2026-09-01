<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldTrigger extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    public float $boost = 1;
    public function definedProperties(): array
    {
        return ['boost' => 'boost'];
    }
}