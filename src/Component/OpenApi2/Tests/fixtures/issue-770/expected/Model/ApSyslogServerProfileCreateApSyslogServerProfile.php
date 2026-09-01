<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSyslogServerProfileCreateApSyslogServerProfile
{
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $primaryAddress;
    /**
     * @var int
     */
    public int $primaryPort;
    /**
     * @var string
     */
    public string $primaryProtocol;
    /**
     * @var string
     */
    public string $secondaryAddress;
    /**
     * @var int
     */
    public int $secondaryPort;
    /**
     * @var string
     */
    public string $secondaryProtocol = 'IPPROTO_TCP';
    /**
     * @var string
     */
    public string $redundancyMode = 'ACTIVE_ACTIVE';
    /**
     * @var string
     */
    public string $flowLevel = 'GENERAL_LOGS';
    /**
     * @var string
     */
    public string $facility = 'KEEP_ORIGINAL';
    /**
     * @var string
     */
    public string $priority = 'ERROR';
}