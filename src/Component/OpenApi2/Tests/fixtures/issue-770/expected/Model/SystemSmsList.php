<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemSmsList
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
     * Total SMS gateway count
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicates whether there are more SMS gateway after the list that is currently displayed
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first SMS gateway returned out of the complete SMS gateway list
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * @var list<SystemSms>
     */
    protected $list;
    /**
     * @var CommonRbacMetadata
     */
    protected $extra;
    /**
     * Total SMS gateway count
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total SMS gateway count
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
     * Indicates whether there are more SMS gateway after the list that is currently displayed
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicates whether there are more SMS gateway after the list that is currently displayed
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
     * Index of the first SMS gateway returned out of the complete SMS gateway list
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first SMS gateway returned out of the complete SMS gateway list
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
     * @return list<SystemSms>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<SystemSms> $list
     *
     * @return self
     */
    public function setList(array $list): self
    {
        $this->initialized['list'] = true;
        $this->list = $list;
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
}