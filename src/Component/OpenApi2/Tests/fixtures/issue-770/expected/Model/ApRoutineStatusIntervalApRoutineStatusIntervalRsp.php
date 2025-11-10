<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApRoutineStatusIntervalApRoutineStatusIntervalRsp
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
    protected $apRoutineStatusInterval;
    /**
     * @return int
     */
    public function getApRoutineStatusInterval(): int
    {
        return $this->apRoutineStatusInterval;
    }
    /**
     * @param int $apRoutineStatusInterval
     *
     * @return self
     */
    public function setApRoutineStatusInterval(int $apRoutineStatusInterval): self
    {
        $this->initialized['apRoutineStatusInterval'] = true;
        $this->apRoutineStatusInterval = $apRoutineStatusInterval;
        return $this;
    }
}