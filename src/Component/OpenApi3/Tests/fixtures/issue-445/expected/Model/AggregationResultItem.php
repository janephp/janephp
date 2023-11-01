<?php

namespace PicturePark\API\Model;

class AggregationResultItem
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
     * Value matched.
     *
     * @var string
     */
    protected $name;
    /**
     * Number of items matched.
     *
     * @var int
     */
    protected $count;
    /**
    * Ready to use filter to filter the data based on the aggregation result values.
    It can be passed as one of the aggregation filters of an aggregation query: it returns documents meeting the aggregation condition.
    *
    * @var mixed|null
    */
    protected $filter;
    /**
     * True if the current result item matches on of the aggregation filters sent in the query.
     *
     * @var bool
     */
    protected $active;
    /**
     * Inner aggregation results, if inner aggregations were provided in the query.
     *
     * @var AggregationResult[]|null
     */
    protected $aggregationResults;
    /**
     * Value matched.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Value matched.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Number of items matched.
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * Number of items matched.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
    * Ready to use filter to filter the data based on the aggregation result values.
    It can be passed as one of the aggregation filters of an aggregation query: it returns documents meeting the aggregation condition.
    *
    * @return mixed
    */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
    * Ready to use filter to filter the data based on the aggregation result values.
    It can be passed as one of the aggregation filters of an aggregation query: it returns documents meeting the aggregation condition.
    *
    * @param mixed $filter
    *
    * @return self
    */
    public function setFilter($filter) : self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * True if the current result item matches on of the aggregation filters sent in the query.
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * True if the current result item matches on of the aggregation filters sent in the query.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * Inner aggregation results, if inner aggregations were provided in the query.
     *
     * @return AggregationResult[]|null
     */
    public function getAggregationResults() : ?array
    {
        return $this->aggregationResults;
    }
    /**
     * Inner aggregation results, if inner aggregations were provided in the query.
     *
     * @param AggregationResult[]|null $aggregationResults
     *
     * @return self
     */
    public function setAggregationResults(?array $aggregationResults) : self
    {
        $this->initialized['aggregationResults'] = true;
        $this->aggregationResults = $aggregationResults;
        return $this;
    }
}