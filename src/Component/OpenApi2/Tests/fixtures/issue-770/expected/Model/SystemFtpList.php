<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemFtpList
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
     * Total FTP count
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicates whether there are more FTPs after the list that is currently displayed
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first FTP returned out of the complete FTP list
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * @var CommonRbacMetadata
     */
    protected $extra;
    /**
     * @var list<SystemFtp>
     */
    protected $list;
    /**
     * Total FTP count
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total FTP count
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
     * Indicates whether there are more FTPs after the list that is currently displayed
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicates whether there are more FTPs after the list that is currently displayed
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
     * Index of the first FTP returned out of the complete FTP list
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first FTP returned out of the complete FTP list
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
     * @return list<SystemFtp>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<SystemFtp> $list
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