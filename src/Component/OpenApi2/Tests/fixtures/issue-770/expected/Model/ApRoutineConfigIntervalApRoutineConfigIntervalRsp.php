<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApRoutineConfigIntervalApRoutineConfigIntervalRsp
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
     * @var int
     */
    protected $upperBound;
    /**
     * @var int
     */
    protected $lowerBound;
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
    /**
     * @return int
     */
    public function getUpperBound(): int
    {
        return $this->upperBound;
    }
    /**
     * @param int $upperBound
     *
     * @return self
     */
    public function setUpperBound(int $upperBound): self
    {
        $this->initialized['upperBound'] = true;
        $this->upperBound = $upperBound;
        return $this;
    }
    /**
     * @return int
     */
    public function getLowerBound(): int
    {
        return $this->lowerBound;
    }
    /**
     * @param int $lowerBound
     *
     * @return self
     */
    public function setLowerBound(int $lowerBound): self
    {
        $this->initialized['lowerBound'] = true;
        $this->lowerBound = $lowerBound;
        return $this;
    }
}