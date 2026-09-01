<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApCloudOnBoardingSyncResultFailAps
{
    /**
     * Number of failed provisions APs
     *
     * @var int
     */
    public int $count;
    /**
     * @var list<ApCloudOnBoardingSyncResultFailApsApsItem>
     */
    public array $aps;
}