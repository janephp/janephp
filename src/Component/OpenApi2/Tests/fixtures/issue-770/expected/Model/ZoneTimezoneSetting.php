<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneTimezoneSetting
{
    /**
     * System defined time zone, please refer to the 'Overview > Time Zone' list
     *
     * @var string
     */
    public string $systemTimezone;
    /**
     * @var ZoneCustomizedTimeZone
     */
    public ZoneCustomizedTimeZone $customizedTimezone;
}