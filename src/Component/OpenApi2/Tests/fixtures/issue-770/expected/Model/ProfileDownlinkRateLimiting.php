<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileDownlinkRateLimiting
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
     * Downlink rate limiting enabled or disabled
     *
     * @var bool
     */
    protected $downlinkRateLimitingEnabled = false;
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var string
     */
    protected $downlinkRateLimitingBps;
    /**
     * Downlink rate limiting enabled or disabled
     *
     * @return bool
     */
    public function getDownlinkRateLimitingEnabled(): bool
    {
        return $this->downlinkRateLimitingEnabled;
    }
    /**
     * Downlink rate limiting enabled or disabled
     *
     * @param bool $downlinkRateLimitingEnabled
     *
     * @return self
     */
    public function setDownlinkRateLimitingEnabled(bool $downlinkRateLimitingEnabled): self
    {
        $this->initialized['downlinkRateLimitingEnabled'] = true;
        $this->downlinkRateLimitingEnabled = $downlinkRateLimitingEnabled;
        return $this;
    }
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @return string
     */
    public function getDownlinkRateLimitingBps(): string
    {
        return $this->downlinkRateLimitingBps;
    }
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @param string $downlinkRateLimitingBps
     *
     * @return self
     */
    public function setDownlinkRateLimitingBps(string $downlinkRateLimitingBps): self
    {
        $this->initialized['downlinkRateLimitingBps'] = true;
        $this->downlinkRateLimitingBps = $downlinkRateLimitingBps;
        return $this;
    }
}