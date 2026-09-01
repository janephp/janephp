<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class DateRangeAggregator extends AggregatorBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The field's ID to execute the aggregation on.
     *
     * @var string
     */
    public string $field;
    /**
     * A list of date time ranges.
     *
     * @var list<DateRangeForAggregator>
     */
    public array $ranges;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'ranges' => 'ranges'];
    }
}