<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileUplinkRateLimiting
{
    /**
     * Uplink rate limiting enabled or disabled
     *
     * @var bool
     */
    public bool $uplinkRateLimitingEnabled = false;
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var string
     */
    public string $uplinkRateLimitingBps;
}