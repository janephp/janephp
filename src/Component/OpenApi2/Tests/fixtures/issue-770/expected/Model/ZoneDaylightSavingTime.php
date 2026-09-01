<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ZoneDaylightSavingTime
{
    /**
     * Month when daylight saving time begins
     *
     * @var int
     */
    public int $month;
    /**
     * Week of the month (1 for the first week, 2 for the second week, and so on)
     *
     * @var int
     */
    public int $week;
    /**
     * Day of the week (0 for Sunday, 1 for Monday, 2 for Tuesday, and so on)
     *
     * @var int
     */
    public int $day;
    /**
     * Hour of the day
     *
     * @var int
     */
    public int $hour;
}