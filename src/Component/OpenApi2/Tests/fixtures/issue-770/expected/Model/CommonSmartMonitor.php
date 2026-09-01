<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonSmartMonitor
{
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