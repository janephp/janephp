<?php

namespace PicturePark\API\Model;

class DateRangeAggregator extends AggregatorBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
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
     * A list of date time ranges.
     *
     * @var list<DateRangeForAggregator>
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
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * A list of date time ranges.
     *
     * @return list<DateRangeForAggregator>
     */
    public function getRanges() : array
    {
        return $this->ranges;
    }
    /**
     * A list of date time ranges.
     *
     * @param list<DateRangeForAggregator> $ranges
     *
     * @return self
     */
    public function setRanges(array $ranges) : self
    {
        $this->initialized['ranges'] = true;
        $this->ranges = $ranges;
        return $this;
    }
}