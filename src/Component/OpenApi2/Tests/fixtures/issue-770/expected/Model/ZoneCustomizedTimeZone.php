<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneCustomizedTimeZone
{
    /**
     * Time zone abbreviation
     *
     * @var string
     */
    public string $abbreviation;
    /**
     * GMT offset
     *
     * @var int
     */
    public int $gmtOffset;
    /**
     * GMT offset minute
     *
     * @var int
     */
    public int $gmtOffsetMinute;
    /**
     * @var ZoneDaylightSavingTime
     */
    public ZoneDaylightSavingTime $start;
    /**
     * @var ZoneDaylightSavingTime
     */
    public ZoneDaylightSavingTime $end;
}