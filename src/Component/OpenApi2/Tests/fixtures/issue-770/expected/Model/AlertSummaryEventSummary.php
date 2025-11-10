<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AlertSummaryEventSummary
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
    protected $criticalCount;
    /**
     * @var int
     */
    protected $majorCount;
    /**
     * @var int
     */
    protected $minorCount;
    /**
     * @var int
     */
    protected $warningCount;
    /**
     * @var int
     */
    protected $informationalCount;
    /**
     * @var int
     */
    protected $debugCount;
    /**
     * @return int
     */
    public function getCriticalCount(): int
    {
        return $this->criticalCount;
    }
    /**
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
     * @return int
     */
    public function getMajorCount(): int
    {
        return $this->majorCount;
    }
    /**
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
     * @return int
     */
    public function getMinorCount(): int
    {
        return $this->minorCount;
    }
    /**
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
     * @return int
     */
    public function getWarningCount(): int
    {
        return $this->warningCount;
    }
    /**
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
    /**
     * @return int
     */
    public function getInformationalCount(): int
    {
        return $this->informationalCount;
    }
    /**
     * @param int $informationalCount
     *
     * @return self
     */
    public function setInformationalCount(int $informationalCount): self
    {
        $this->initialized['informationalCount'] = true;
        $this->informationalCount = $informationalCount;
        return $this;
    }
    /**
     * @return int
     */
    public function getDebugCount(): int
    {
        return $this->debugCount;
    }
    /**
     * @param int $debugCount
     *
     * @return self
     */
    public function setDebugCount(int $debugCount): self
    {
        $this->initialized['debugCount'] = true;
        $this->debugCount = $debugCount;
        return $this;
    }
}