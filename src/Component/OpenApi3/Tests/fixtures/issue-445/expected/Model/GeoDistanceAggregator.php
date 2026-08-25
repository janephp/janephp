<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class GeoDistanceAggregator extends AggregatorBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The field's ID to execute the aggregation on.
     *
     * @var string
     */
    protected $field;
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @var GeoLocation
     */
    protected $location;
    /**
     * A list of distance ranges.
     *
     * @var list<GeoDistance>
     */
    protected $ranges;
    /**
     * The field's ID to execute the aggregation on.
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
     * The field's ID to execute the aggregation on.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @return GeoLocation
     */
    public function getLocation(): GeoLocation
    {
        return $this->location;
    }
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @param GeoLocation $location
     *
     * @return self
     */
    public function setLocation(GeoLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * A list of distance ranges.
     *
     * @return list<GeoDistance>
     */
    public function getRanges(): array
    {
        return $this->ranges;
    }
    /**
     * A list of distance ranges.
     *
     * @param list<GeoDistance> $ranges
     *
     * @return self
     */
    public function setRanges(array $ranges): self
    {
        $this->initialized['ranges'] = true;
        $this->ranges = $ranges;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['field' => ['field', 'getField', 'setField'], 'location' => ['location', 'getLocation', 'setLocation'], 'ranges' => ['ranges', 'getRanges', 'setRanges']];
    }
}