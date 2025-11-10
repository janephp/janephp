<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonRateLimiting
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
     * Maximum outstanding requests (MOR), value should be 0 or between 10 and 4096
     *
     * @var int
     */
    protected $maxOutstandingRequestsPerServer = 0;
    /**
     * Threshold, value should be 0 if MOR is 0, or between 10 and 90 if MOR is between 10 and 4096
     *
     * @var int
     */
    protected $threshold = 0;
    /**
     * Sanity timer
     *
     * @var int
     */
    protected $sanityTimer = 10;
    /**
     * Maximum outstanding requests (MOR), value should be 0 or between 10 and 4096
     *
     * @return int
     */
    public function getMaxOutstandingRequestsPerServer(): int
    {
        return $this->maxOutstandingRequestsPerServer;
    }
    /**
     * Maximum outstanding requests (MOR), value should be 0 or between 10 and 4096
     *
     * @param int $maxOutstandingRequestsPerServer
     *
     * @return self
     */
    public function setMaxOutstandingRequestsPerServer(int $maxOutstandingRequestsPerServer): self
    {
        $this->initialized['maxOutstandingRequestsPerServer'] = true;
        $this->maxOutstandingRequestsPerServer = $maxOutstandingRequestsPerServer;
        return $this;
    }
    /**
     * Threshold, value should be 0 if MOR is 0, or between 10 and 90 if MOR is between 10 and 4096
     *
     * @return int
     */
    public function getThreshold(): int
    {
        return $this->threshold;
    }
    /**
     * Threshold, value should be 0 if MOR is 0, or between 10 and 90 if MOR is between 10 and 4096
     *
     * @param int $threshold
     *
     * @return self
     */
    public function setThreshold(int $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
    /**
     * Sanity timer
     *
     * @return int
     */
    public function getSanityTimer(): int
    {
        return $this->sanityTimer;
    }
    /**
     * Sanity timer
     *
     * @param int $sanityTimer
     *
     * @return self
     */
    public function setSanityTimer(int $sanityTimer): self
    {
        $this->initialized['sanityTimer'] = true;
        $this->sanityTimer = $sanityTimer;
        return $this;
    }
}