<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApNeighborAPList
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
     * Total mesh neighbor APs count
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicator of whether there are more Mesh Neighbor APs after the current displayed list
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first Mesh Neighbor AP returned out of the complete Mesh Neighbor AP list
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * @var list<ApNeighborAPListListItem>
     */
    protected $list;
    /**
     * Total mesh neighbor APs count
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total mesh neighbor APs count
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
     * Indicator of whether there are more Mesh Neighbor APs after the current displayed list
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicator of whether there are more Mesh Neighbor APs after the current displayed list
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
     * Index of the first Mesh Neighbor AP returned out of the complete Mesh Neighbor AP list
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first Mesh Neighbor AP returned out of the complete Mesh Neighbor AP list
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
     * @return list<ApNeighborAPListListItem>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<ApNeighborAPListListItem> $list
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