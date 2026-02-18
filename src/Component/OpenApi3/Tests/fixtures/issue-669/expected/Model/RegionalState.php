<?php

namespace Jane\Generated\DigitalOcean\Model;

class RegionalState extends \ArrayObject
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
     * @var RegionState
     */
    protected $usEast;
    /**
     * @var RegionState
     */
    protected $euWest;
    /**
     * @return RegionState
     */
    public function getUsEast(): RegionState
    {
        return $this->usEast;
    }
    /**
     * @param RegionState $usEast
     *
     * @return self
     */
    public function setUsEast(RegionState $usEast): self
    {
        $this->initialized['usEast'] = true;
        $this->usEast = $usEast;
        return $this;
    }
    /**
     * @return RegionState
     */
    public function getEuWest(): RegionState
    {
        return $this->euWest;
    }
    /**
     * @param RegionState $euWest
     *
     * @return self
     */
    public function setEuWest(RegionState $euWest): self
    {
        $this->initialized['euWest'] = true;
        $this->euWest = $euWest;
        return $this;
    }
}