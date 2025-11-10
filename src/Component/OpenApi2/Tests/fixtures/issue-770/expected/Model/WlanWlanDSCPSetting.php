<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanDSCPSetting
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
     * Enabled or disabled
     *
     * @var bool
     */
    protected $enable;
    /**
     * Priority
     *
     * @var int
     */
    protected $priority;
    /**
     * DSCP range - low
     *
     * @var int
     */
    protected $low;
    /**
     * DSCP range - high
     *
     * @var int
     */
    protected $high;
    /**
     * @var list<int>
     */
    protected $excepts;
    /**
     * Enabled or disabled
     *
     * @return bool
     */
    public function getEnable(): bool
    {
        return $this->enable;
    }
    /**
     * Enabled or disabled
     *
     * @param bool $enable
     *
     * @return self
     */
    public function setEnable(bool $enable): self
    {
        $this->initialized['enable'] = true;
        $this->enable = $enable;
        return $this;
    }
    /**
     * Priority
     *
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * Priority
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * DSCP range - low
     *
     * @return int
     */
    public function getLow(): int
    {
        return $this->low;
    }
    /**
     * DSCP range - low
     *
     * @param int $low
     *
     * @return self
     */
    public function setLow(int $low): self
    {
        $this->initialized['low'] = true;
        $this->low = $low;
        return $this;
    }
    /**
     * DSCP range - high
     *
     * @return int
     */
    public function getHigh(): int
    {
        return $this->high;
    }
    /**
     * DSCP range - high
     *
     * @param int $high
     *
     * @return self
     */
    public function setHigh(int $high): self
    {
        $this->initialized['high'] = true;
        $this->high = $high;
        return $this;
    }
    /**
     * @return list<int>
     */
    public function getExcepts(): array
    {
        return $this->excepts;
    }
    /**
     * @param list<int> $excepts
     *
     * @return self
     */
    public function setExcepts(array $excepts): self
    {
        $this->initialized['excepts'] = true;
        $this->excepts = $excepts;
        return $this;
    }
}