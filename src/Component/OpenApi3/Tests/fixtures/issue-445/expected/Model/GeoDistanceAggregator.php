<?php

namespace PicturePark\API\Model;

class GeoDistanceAggregator extends AggregatorBase
{
    /**
     * The field's ID to execute the aggregation on.
     *
     * @var string
     */
    protected $field;
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @var mixed
     */
    protected $location;
    /**
     * A list of distance ranges.
     *
     * @var GeoDistance[]
     */
    protected $ranges;
    /**
     * The field's ID to execute the aggregation on.
     *
     * @return string
     */
    public function getField() : string
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
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @param mixed $location
     *
     * @return self
     */
    public function setLocation($location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * A list of distance ranges.
     *
     * @return GeoDistance[]
     */
    public function getRanges() : array
    {
        return $this->ranges;
    }
    /**
     * A list of distance ranges.
     *
     * @param GeoDistance[] $ranges
     *
     * @return self
     */
    public function setRanges(array $ranges) : self
    {
        $this->ranges = $ranges;
        return $this;
    }
}