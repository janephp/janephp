<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileUplinkRateLimiting
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
     * Uplink rate limiting enabled or disabled
     *
     * @var bool
     */
    protected $uplinkRateLimitingEnabled = false;
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var string
     */
    protected $uplinkRateLimitingBps;
    /**
     * Uplink rate limiting enabled or disabled
     *
     * @return bool
     */
    public function getUplinkRateLimitingEnabled(): bool
    {
        return $this->uplinkRateLimitingEnabled;
    }
    /**
     * Uplink rate limiting enabled or disabled
     *
     * @param bool $uplinkRateLimitingEnabled
     *
     * @return self
     */
    public function setUplinkRateLimitingEnabled(bool $uplinkRateLimitingEnabled): self
    {
        $this->initialized['uplinkRateLimitingEnabled'] = true;
        $this->uplinkRateLimitingEnabled = $uplinkRateLimitingEnabled;
        return $this;
    }
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @return string
     */
    public function getUplinkRateLimitingBps(): string
    {
        return $this->uplinkRateLimitingBps;
    }
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @param string $uplinkRateLimitingBps
     *
     * @return self
     */
    public function setUplinkRateLimitingBps(string $uplinkRateLimitingBps): self
    {
        $this->initialized['uplinkRateLimitingBps'] = true;
        $this->uplinkRateLimitingBps = $uplinkRateLimitingBps;
        return $this;
    }
}