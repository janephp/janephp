<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NestedAggregator extends AggregatorBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The path pointing to the nested object.
     *
     * @var string
     */
    public string $path;
    public function definedProperties(): array
    {
        return ['path' => 'path'];
    }
}