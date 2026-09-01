<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemApNumberLimitSettingOfZone
{
    /**
     * Admin Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * Admin Domain Name
     *
     * @var string
     */
    public string $domainName;
    /**
     * Zone Id
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Zone Name
     *
     * @var string
     */
    public string $zoneName;
    /**
     * Number of Limit
     *
     * @var int
     */
    public int $numberLimit;
    /**
     * Share mode
     *
     * @var bool
     */
    public bool $shared;
}