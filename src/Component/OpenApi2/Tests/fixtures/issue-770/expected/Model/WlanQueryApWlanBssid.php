<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanQueryApWlanBssid
{
    /**
     * @var string
     */
    public string $apMac;
    /**
     * @var string
     */
    public string $deviceName;
    /**
     * @var list<WlanQueryWlanBssid>
     */
    public array $wlanBssids;
}