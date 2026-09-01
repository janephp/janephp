<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class GeoDistanceAggregator extends AggregatorBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The field's ID to execute the aggregation on.
     *
     * @var string
     */
    public string $field;
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @var GeoLocation
     */
    public GeoLocation $location;
    /**
     * A list of distance ranges.
     *
     * @var list<GeoDistance>
     */
    public array $ranges;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'location' => 'location', 'ranges' => 'ranges'];
    }
}