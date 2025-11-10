<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileSiteSecondary
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
     * The index of site redundancy
     *
     * @var int
     */
    protected $index;
    /**
     * The DP Id of site redundancy
     *
     * @var string
     */
    protected $dpId;
    /**
     * The index of site redundancy
     *
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }
    /**
     * The index of site redundancy
     *
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * The DP Id of site redundancy
     *
     * @return string
     */
    public function getDpId(): string
    {
        return $this->dpId;
    }
    /**
     * The DP Id of site redundancy
     *
     * @param string $dpId
     *
     * @return self
     */
    public function setDpId(string $dpId): self
    {
        $this->initialized['dpId'] = true;
        $this->dpId = $dpId;
        return $this;
    }
}