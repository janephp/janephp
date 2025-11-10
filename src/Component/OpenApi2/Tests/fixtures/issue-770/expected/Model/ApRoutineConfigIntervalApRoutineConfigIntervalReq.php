<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApRoutineConfigIntervalApRoutineConfigIntervalReq
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
    protected $apRoutineConfigInterval;
    /**
     * @return int
     */
    public function getApRoutineConfigInterval(): int
    {
        return $this->apRoutineConfigInterval;
    }
    /**
     * @param int $apRoutineConfigInterval
     *
     * @return self
     */
    public function setApRoutineConfigInterval(int $apRoutineConfigInterval): self
    {
        $this->initialized['apRoutineConfigInterval'] = true;
        $this->apRoutineConfigInterval = $apRoutineConfigInterval;
        return $this;
    }
}