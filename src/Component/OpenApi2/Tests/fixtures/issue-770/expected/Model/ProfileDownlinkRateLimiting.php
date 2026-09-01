<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileDownlinkRateLimiting
{
    /**
     * Downlink rate limiting enabled or disabled
     *
     * @var bool
     */
    public bool $downlinkRateLimitingEnabled = false;
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var string
     */
    public string $downlinkRateLimitingBps;
}