<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApAlarmSummary
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
     * Critical alarm count
     *
     * @var int
     */
    protected $criticalCount;
    /**
     * Major alarm count
     *
     * @var int
     */
    protected $majorCount;
    /**
     * Minor alarm count
     *
     * @var int
     */
    protected $minorCount;
    /**
     * Warning alarm count
     *
     * @var int
     */
    protected $warningCount;
    /**
     * Critical alarm count
     *
     * @return int
     */
    public function getCriticalCount(): int
    {
        return $this->criticalCount;
    }
    /**
     * Critical alarm count
     *
     * @param int $criticalCount
     *
     * @return self
     */
    public function setCriticalCount(int $criticalCount): self
    {
        $this->initialized['criticalCount'] = true;
        $this->criticalCount = $criticalCount;
        return $this;
    }
    /**
     * Major alarm count
     *
     * @return int
     */
    public function getMajorCount(): int
    {
        return $this->majorCount;
    }
    /**
     * Major alarm count
     *
     * @param int $majorCount
     *
     * @return self
     */
    public function setMajorCount(int $majorCount): self
    {
        $this->initialized['majorCount'] = true;
        $this->majorCount = $majorCount;
        return $this;
    }
    /**
     * Minor alarm count
     *
     * @return int
     */
    public function getMinorCount(): int
    {
        return $this->minorCount;
    }
    /**
     * Minor alarm count
     *
     * @param int $minorCount
     *
     * @return self
     */
    public function setMinorCount(int $minorCount): self
    {
        $this->initialized['minorCount'] = true;
        $this->minorCount = $minorCount;
        return $this;
    }
    /**
     * Warning alarm count
     *
     * @return int
     */
    public function getWarningCount(): int
    {
        return $this->warningCount;
    }
    /**
     * Warning alarm count
     *
     * @param int $warningCount
     *
     * @return self
     */
    public function setWarningCount(int $warningCount): self
    {
        $this->initialized['warningCount'] = true;
        $this->warningCount = $warningCount;
        return $this;
    }
}