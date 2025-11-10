<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class NorthboundDataStreamingNorthboundDataStreamingEventCodes
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Total Northbound Data Streaming accepted event code count
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicates whether there are more Northbound Data Streaming accepted event codes after the currently displayed list
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first event code returned from the complete event code set
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * @var list<NorthboundDataStreamingNorthboundDataStreamingEventCodesListItem>
     */
    protected $list;
    /**
     * Total Northbound Data Streaming accepted event code count
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total Northbound Data Streaming accepted event code count
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * Indicates whether there are more Northbound Data Streaming accepted event codes after the currently displayed list
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicates whether there are more Northbound Data Streaming accepted event codes after the currently displayed list
     *
     * @param bool $hasMore
     *
     * @return self
     */
    public function setHasMore(bool $hasMore): self
    {
        $this->initialized['hasMore'] = true;
        $this->hasMore = $hasMore;
        return $this;
    }
    /**
     * Index of the first event code returned from the complete event code set
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first event code returned from the complete event code set
     *
     * @param int $firstIndex
     *
     * @return self
     */
    public function setFirstIndex(int $firstIndex): self
    {
        $this->initialized['firstIndex'] = true;
        $this->firstIndex = $firstIndex;
        return $this;
    }
    /**
     * @return list<NorthboundDataStreamingNorthboundDataStreamingEventCodesListItem>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<NorthboundDataStreamingNorthboundDataStreamingEventCodesListItem> $list
     *
     * @return self
     */
    public function setList(array $list): self
    {
        $this->initialized['list'] = true;
        $this->list = $list;
        return $this;
    }
}