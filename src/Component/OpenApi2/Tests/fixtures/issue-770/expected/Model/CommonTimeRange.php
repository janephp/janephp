<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonTimeRange
{
    /**
     * start time for collecting data
     *
     * @var int
     */
    public int $start;
    /**
     * end time for collecting data
     *
     * @var int
     */
    public int $end;
    /**
     * time interval in second
     *
     * @var int
     */
    public int $interval;
    /**
     * time field for collecting data
     *
     * @var string
     */
    public string $field;
}