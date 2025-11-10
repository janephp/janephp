<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskGetDpskEnabledWlans
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
     * Total DPSK enabled WLAN count of the zone
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicates whether there are more DPSK enabled WLANs after the list that is currently displayed
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first DPSK enabled WLAN returned out of the complete WLAN list
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * @var list<DpskGetDpskEnabledWlansListItem>
     */
    protected $list;
    /**
     * Total DPSK enabled WLAN count of the zone
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total DPSK enabled WLAN count of the zone
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
     * Indicates whether there are more DPSK enabled WLANs after the list that is currently displayed
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicates whether there are more DPSK enabled WLANs after the list that is currently displayed
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
     * Index of the first DPSK enabled WLAN returned out of the complete WLAN list
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first DPSK enabled WLAN returned out of the complete WLAN list
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
     * @return list<DpskGetDpskEnabledWlansListItem>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<DpskGetDpskEnabledWlansListItem> $list
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