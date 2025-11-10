<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskGetDpskResult
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
     * @var int
     */
    protected $resultCount;
    /**
     * Information list of DPSK
     *
     * @var list<DpskDpskInfoItem>
     */
    protected $dpskInfoList;
    /**
     * @return int
     */
    public function getResultCount(): int
    {
        return $this->resultCount;
    }
    /**
     * @param int $resultCount
     *
     * @return self
     */
    public function setResultCount(int $resultCount): self
    {
        $this->initialized['resultCount'] = true;
        $this->resultCount = $resultCount;
        return $this;
    }
    /**
     * Information list of DPSK
     *
     * @return list<DpskDpskInfoItem>
     */
    public function getDpskInfoList(): array
    {
        return $this->dpskInfoList;
    }
    /**
     * Information list of DPSK
     *
     * @param list<DpskDpskInfoItem> $dpskInfoList
     *
     * @return self
     */
    public function setDpskInfoList(array $dpskInfoList): self
    {
        $this->initialized['dpskInfoList'] = true;
        $this->dpskInfoList = $dpskInfoList;
        return $this;
    }
}