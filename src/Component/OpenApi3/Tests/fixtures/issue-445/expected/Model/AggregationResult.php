<?php

namespace PicturePark\API\Model;

class AggregationResult
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
     * Name of the aggregation.
     *
     * @var string
     */
    protected $name;
    /**
     * When there are lots of unique terms, Elastic Search only returns the top terms; this number is the sum of the document counts for all buckets that are not part of the response.
     *
     * @var int|null
     */
    protected $sumOtherDocCount;
    /**
    * Items returned for the aggregation. Each item consists of a bucket with the matched value and the number of matches.
    Optionally inner aggregations for further drill down can be available.
    *
    * @var AggregationResultItem[]|null
    */
    protected $aggregationResultItems;
    /**
     * Name of the aggregation.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the aggregation.
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
     * When there are lots of unique terms, Elastic Search only returns the top terms; this number is the sum of the document counts for all buckets that are not part of the response.
     *
     * @return int|null
     */
    public function getSumOtherDocCount() : ?int
    {
        return $this->sumOtherDocCount;
    }
    /**
     * When there are lots of unique terms, Elastic Search only returns the top terms; this number is the sum of the document counts for all buckets that are not part of the response.
     *
     * @param int|null $sumOtherDocCount
     *
     * @return self
     */
    public function setSumOtherDocCount(?int $sumOtherDocCount) : self
    {
        $this->initialized['sumOtherDocCount'] = true;
        $this->sumOtherDocCount = $sumOtherDocCount;
        return $this;
    }
    /**
    * Items returned for the aggregation. Each item consists of a bucket with the matched value and the number of matches.
    Optionally inner aggregations for further drill down can be available.
    *
    * @return AggregationResultItem[]|null
    */
    public function getAggregationResultItems() : ?array
    {
        return $this->aggregationResultItems;
    }
    /**
    * Items returned for the aggregation. Each item consists of a bucket with the matched value and the number of matches.
    Optionally inner aggregations for further drill down can be available.
    *
    * @param AggregationResultItem[]|null $aggregationResultItems
    *
    * @return self
    */
    public function setAggregationResultItems(?array $aggregationResultItems) : self
    {
        $this->initialized['aggregationResultItems'] = true;
        $this->aggregationResultItems = $aggregationResultItems;
        return $this;
    }
}