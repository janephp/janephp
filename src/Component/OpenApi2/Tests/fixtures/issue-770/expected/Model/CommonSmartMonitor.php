<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonSmartMonitor
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
     * Interval in seconds. This is required if smartMonitor is enabled
     *
     * @var int
     */
    protected $intervalInSec = 10;
    /**
     * Retry threshold. This is required if smartMonitor is enabled
     *
     * @var int
     */
    protected $retryThreshold = 3;
    /**
     * Interval in seconds. This is required if smartMonitor is enabled
     *
     * @return int
     */
    public function getIntervalInSec(): int
    {
        return $this->intervalInSec;
    }
    /**
     * Interval in seconds. This is required if smartMonitor is enabled
     *
     * @param int $intervalInSec
     *
     * @return self
     */
    public function setIntervalInSec(int $intervalInSec): self
    {
        $this->initialized['intervalInSec'] = true;
        $this->intervalInSec = $intervalInSec;
        return $this;
    }
    /**
     * Retry threshold. This is required if smartMonitor is enabled
     *
     * @return int
     */
    public function getRetryThreshold(): int
    {
        return $this->retryThreshold;
    }
    /**
     * Retry threshold. This is required if smartMonitor is enabled
     *
     * @param int $retryThreshold
     *
     * @return self
     */
    public function setRetryThreshold(int $retryThreshold): self
    {
        $this->initialized['retryThreshold'] = true;
        $this->retryThreshold = $retryThreshold;
        return $this;
    }
}