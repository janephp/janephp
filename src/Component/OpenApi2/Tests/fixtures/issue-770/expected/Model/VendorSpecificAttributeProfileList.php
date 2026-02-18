<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VendorSpecificAttributeProfileList
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
     * Total number of the profiles
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicates whether there are more profiles after the list that is currently displayed
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first profile returned out of the profile list
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * Information list of the vendor specific attribute profile
     *
     * @var list<VendorSpecificAttributeProfileListListItem>
     */
    protected $list;
    /**
     * Total number of the profiles
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of the profiles
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
     * Indicates whether there are more profiles after the list that is currently displayed
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicates whether there are more profiles after the list that is currently displayed
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
     * Index of the first profile returned out of the profile list
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first profile returned out of the profile list
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
     * Information list of the vendor specific attribute profile
     *
     * @return list<VendorSpecificAttributeProfileListListItem>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * Information list of the vendor specific attribute profile
     *
     * @param list<VendorSpecificAttributeProfileListListItem> $list
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