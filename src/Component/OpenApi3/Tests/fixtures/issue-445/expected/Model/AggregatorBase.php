<?php

namespace PicturePark\API\Model;

class AggregatorBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @var string
     */
    protected $name;
    /**
     * Language specific field names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @var AggregatorBase[]|null
     */
    protected $aggregators;
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->initialized['name'] = true;
        $this->name = $name;
    }
    /**
     * Language specific field names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific field names.
     *
     * @param mixed $names
     */
    public function setNames($names)
    {
        $this->initialized['names'] = true;
        $this->names = $names;
    }
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @return AggregatorBase[]|null
     */
    public function getAggregators() : ?array
    {
        return $this->aggregators;
    }
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @param AggregatorBase[]|null $aggregators
     */
    public function setAggregators(?array $aggregators)
    {
        $this->initialized['aggregators'] = true;
        $this->aggregators = $aggregators;
    }
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @param mixed $filter
     */
    public function setFilter($filter)
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     */
    public function setKind(string $kind)
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}