<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemApMacOUIList
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
     * Total AP MAC OUI count
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicates whether there are more AP MAC OUIs after the list that is currently displayed
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first AP MAC OUI returned out of the complete AP MAC OUI list
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * @var list<SystemApMacOUI>
     */
    protected $list;
    /**
     * Total AP MAC OUI count
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total AP MAC OUI count
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
     * Indicates whether there are more AP MAC OUIs after the list that is currently displayed
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicates whether there are more AP MAC OUIs after the list that is currently displayed
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
     * Index of the first AP MAC OUI returned out of the complete AP MAC OUI list
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first AP MAC OUI returned out of the complete AP MAC OUI list
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
     * @return list<SystemApMacOUI>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<SystemApMacOUI> $list
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