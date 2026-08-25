<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class DomainDevicePolicyDomainDevicePolicyProfileByQueryCriteria implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Total device policy count
     *
     * @var int
     */
    protected $rawDataTotalCount;
    /**
     * Current page device policy count
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicates if there are more device policy after the currently displayed list
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Index of the first device policy returned out of the complete device policy list
     *
     * @var int
     */
    protected $firstIndex;
    /**
     * @var CommonRbacMetadata
     */
    protected $extra;
    /**
     * @var list<DomainDevicePolicyDomainDevicePolicyProfile>
     */
    protected $list;
    /**
     * Total device policy count
     *
     * @return int
     */
    public function getRawDataTotalCount(): int
    {
        return $this->rawDataTotalCount;
    }
    /**
     * Total device policy count
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
     * Current page device policy count
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Current page device policy count
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
     * Indicates if there are more device policy after the currently displayed list
     *
     * @return bool
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }
    /**
     * Indicates if there are more device policy after the currently displayed list
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
     * Index of the first device policy returned out of the complete device policy list
     *
     * @return int
     */
    public function getFirstIndex(): int
    {
        return $this->firstIndex;
    }
    /**
     * Index of the first device policy returned out of the complete device policy list
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
     * @return list<DomainDevicePolicyDomainDevicePolicyProfile>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<DomainDevicePolicyDomainDevicePolicyProfile> $list
     *
     * @return self
     */
    public function setList(array $list): self
    {
        $this->initialized['list'] = true;
        $this->list = $list;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['rawDataTotalCount' => ['rawDataTotalCount', 'getRawDataTotalCount', 'setRawDataTotalCount'], 'totalCount' => ['totalCount', 'getTotalCount', 'setTotalCount'], 'hasMore' => ['hasMore', 'getHasMore', 'setHasMore'], 'firstIndex' => ['firstIndex', 'getFirstIndex', 'setFirstIndex'], 'extra' => ['extra', 'getExtra', 'setExtra'], 'list' => ['list', 'getList', 'setList']];
    }
}