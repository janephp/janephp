<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonOverrideSmartMonitor
{
    /**
     * @var bool
     */
    public bool $enabled;
    /**
     * Interval in seconds. This is required if smartMonitor is enabled
     *
     * @var int
     */
    public int $intervalInSec = 10;
    /**
     * Retry threshold. This is required if smartMonitor is enabled
     *
     * @var int
     */
    public int $retryThreshold = 3;
}