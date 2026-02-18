<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskDeleteDpskResult
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
}