<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemStatisticListItemDisk
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
     * total
     *
     * @var float
     */
    protected $total;
    /**
     * free
     *
     * @var float
     */
    protected $free;
    /**
     * maxFree
     *
     * @var float
     */
    protected $maxFree;
    /**
     * minFree
     *
     * @var float
     */
    protected $minFree;
    /**
     * total
     *
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }
    /**
     * total
     *
     * @param float $total
     *
     * @return self
     */
    public function setTotal(float $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * free
     *
     * @return float
     */
    public function getFree(): float
    {
        return $this->free;
    }
    /**
     * free
     *
     * @param float $free
     *
     * @return self
     */
    public function setFree(float $free): self
    {
        $this->initialized['free'] = true;
        $this->free = $free;
        return $this;
    }
    /**
     * maxFree
     *
     * @return float
     */
    public function getMaxFree(): float
    {
        return $this->maxFree;
    }
    /**
     * maxFree
     *
     * @param float $maxFree
     *
     * @return self
     */
    public function setMaxFree(float $maxFree): self
    {
        $this->initialized['maxFree'] = true;
        $this->maxFree = $maxFree;
        return $this;
    }
    /**
     * minFree
     *
     * @return float
     */
    public function getMinFree(): float
    {
        return $this->minFree;
    }
    /**
     * minFree
     *
     * @param float $minFree
     *
     * @return self
     */
    public function setMinFree(float $minFree): self
    {
        $this->initialized['minFree'] = true;
        $this->minFree = $minFree;
        return $this;
    }
}