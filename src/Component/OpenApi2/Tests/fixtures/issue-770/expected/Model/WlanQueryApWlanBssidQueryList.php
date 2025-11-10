<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanQueryApWlanBssidQueryList
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
     * Index of first index in current page
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * Has more data or not
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Total matched AP count
     *
     * @var int
     */
    protected $totalCount;
    /**
     * @var CommonRbacMetadata
     */
    protected $extra;
    /**
     * @var list<WlanQueryApWlanBssid>
     */
    protected $list;
    /**
     * Index of first index in current page
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of first index in current page
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
     * Has more data or not
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Has more data or not
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
     * Total matched AP count
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total matched AP count
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
     * @return CommonRbacMetadata
     */
    public function getExtra(): CommonRbacMetadata
    {
        return $this->extra;
    }
    /**
     * @param CommonRbacMetadata $extra
     *
     * @return self
     */
    public function setExtra(CommonRbacMetadata $extra): self
    {
        $this->initialized['extra'] = true;
        $this->extra = $extra;
        return $this;
    }
    /**
     * @return list<WlanQueryApWlanBssid>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<WlanQueryApWlanBssid> $list
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