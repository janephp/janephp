<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileReturnDPGroupDpGroupListWithPriorityItem
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
     * The priority of DP in DP Group
     *
     * @var float
     */
    protected $priority;
    /**
     * DP ID
     *
     * @var string
     */
    protected $dpId;
    /**
     * The priority of DP in DP Group
     *
     * @return float
     */
    public function getPriority(): float
    {
        return $this->priority;
    }
    /**
     * The priority of DP in DP Group
     *
     * @param float $priority
     *
     * @return self
     */
    public function setPriority(float $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * DP ID
     *
     * @return string
     */
    public function getDpId(): string
    {
        return $this->dpId;
    }
    /**
     * DP ID
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