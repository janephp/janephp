<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NumericRangeAggregator extends AggregatorBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The field's ID to execute the aggregation on.
     *
     * @var string|null
     */
    public ?string $field;
    /**
     * A list of numeric ranges on which aggregate.
     *
     * @var list<NumericRangeForAggregator>
     */
    public array $ranges;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'ranges' => 'ranges'];
    }
}