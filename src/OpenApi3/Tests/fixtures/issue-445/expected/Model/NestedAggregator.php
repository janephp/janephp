<?php

namespace PicturePark\API\Model;

class NestedAggregator
{
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
     * The path pointing to the nested object.
     *
     * @var string
     */
    protected $path;
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
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
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
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
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
     *
     * @return self
     */
    public function setAggregators(?array $aggregators) : self
    {
        $this->aggregators = $aggregators;
        return $this;
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
     *
     * @return self
     */
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
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
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * The path pointing to the nested object.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The path pointing to the nested object.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
}