<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemStatisticListItemCpu
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
     * percent
     *
     * @var float
     */
    protected $percent;
    /**
     * maxPercent
     *
     * @var float
     */
    protected $maxPercent;
    /**
     * minPercent
     *
     * @var float
     */
    protected $minPercent;
    /**
     * percent
     *
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }
    /**
     * percent
     *
     * @param float $percent
     *
     * @return self
     */
    public function setPercent(float $percent): self
    {
        $this->initialized['percent'] = true;
        $this->percent = $percent;
        return $this;
    }
    /**
     * maxPercent
     *
     * @return float
     */
    public function getMaxPercent(): float
    {
        return $this->maxPercent;
    }
    /**
     * maxPercent
     *
     * @param float $maxPercent
     *
     * @return self
     */
    public function setMaxPercent(float $maxPercent): self
    {
        $this->initialized['maxPercent'] = true;
        $this->maxPercent = $maxPercent;
        return $this;
    }
    /**
     * minPercent
     *
     * @return float
     */
    public function getMinPercent(): float
    {
        return $this->minPercent;
    }
    /**
     * minPercent
     *
     * @param float $minPercent
     *
     * @return self
     */
    public function setMinPercent(float $minPercent): self
    {
        $this->initialized['minPercent'] = true;
        $this->minPercent = $minPercent;
        return $this;
    }
}