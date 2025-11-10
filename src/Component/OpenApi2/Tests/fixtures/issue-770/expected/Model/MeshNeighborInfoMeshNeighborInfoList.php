<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MeshNeighborInfoMeshNeighborInfoList
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
     * MeshNeighborInfos count.
     *
     * @var int
     */
    protected $rawDataTotalCount;
    /**
     * MeshNeighborInfos count in this response.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Any additional response data.
     *
     * @var mixed
     */
    protected $extra;
    /**
     * Indicator of whether there are more MeshNeighborInfo after the current displayed list
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first MeshNeighborInfo returned out of the complete Rogue AP list
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * @var list<MeshNeighborInfoMeshNeighborInfo>
     */
    protected $list;
    /**
     * MeshNeighborInfos count.
     *
     * @return int
     */
    public function getRawDataTotalCount(): int
    {
        return $this->rawDataTotalCount;
    }
    /**
     * MeshNeighborInfos count.
     *
     * @param int $rawDataTotalCount
     *
     * @return self
     */
    public function setRawDataTotalCount(int $rawDataTotalCount): self
    {
        $this->initialized['rawDataTotalCount'] = true;
        $this->rawDataTotalCount = $rawDataTotalCount;
        return $this;
    }
    /**
     * MeshNeighborInfos count in this response.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * MeshNeighborInfos count in this response.
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
     * Any additional response data.
     *
     * @return mixed
     */
    public function getExtra()
    {
        return $this->extra;
    }
    /**
     * Any additional response data.
     *
     * @param mixed $extra
     *
     * @return self
     */
    public function setExtra($extra): self
    {
        $this->initialized['extra'] = true;
        $this->extra = $extra;
        return $this;
    }
    /**
     * Indicator of whether there are more MeshNeighborInfo after the current displayed list
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicator of whether there are more MeshNeighborInfo after the current displayed list
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
     * Index of the first MeshNeighborInfo returned out of the complete Rogue AP list
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first MeshNeighborInfo returned out of the complete Rogue AP list
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
     * @return list<MeshNeighborInfoMeshNeighborInfo>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<MeshNeighborInfoMeshNeighborInfo> $list
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