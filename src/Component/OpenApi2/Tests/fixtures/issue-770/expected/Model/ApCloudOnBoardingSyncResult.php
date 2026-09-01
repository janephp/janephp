<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApCloudOnBoardingSyncResult
{
    /**
     * Number of synced provisions APs
     *
     * @var int
     */
    public int $syncedCount;
    /**
     * @var ApCloudOnBoardingSyncResultFailAps
     */
    public ApCloudOnBoardingSyncResultFailAps $failAps;
}