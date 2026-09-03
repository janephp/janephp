<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApAlarmSummary
{
    /**
     * Critical alarm count
     *
     * @var int
     */
    public int $criticalCount;
    /**
     * Major alarm count
     *
     * @var int
     */
    public int $majorCount;
    /**
     * Minor alarm count
     *
     * @var int
     */
    public int $minorCount;
    /**
     * Warning alarm count
     *
     * @var int
     */
    public int $warningCount;
}