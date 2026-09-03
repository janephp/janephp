<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonRateLimiting
{
    /**
     * Maximum outstanding requests (MOR), value should be 0 or between 10 and 4096
     *
     * @var int
     */
    public int $maxOutstandingRequestsPerServer = 0;
    /**
     * Threshold, value should be 0 if MOR is 0, or between 10 and 90 if MOR is between 10 and 4096
     *
     * @var int
     */
    public int $threshold = 0;
    /**
     * Sanity timer
     *
     * @var int
     */
    public int $sanityTimer = 10;
}