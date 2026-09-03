<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApMultipleMoveApMultipleMoveResponse
{
    /**
     * Number of AP moved successfully.
     *
     * @var int
     */
    public int $successApCount;
    /**
     * @var ApMultipleMoveApMultipleMoveResponseFailAps
     */
    public ApMultipleMoveApMultipleMoveResponseFailAps $failAps;
}