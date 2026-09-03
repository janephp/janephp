<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApSyslog
{
    /**
     * Indicates whether syslog is enabled or disabled
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * Syslog configuration type.
     *
     * @var string
     */
    public string $syslogConfigType = 'CUSTOM';
    /**
     * Syslog server profile ID.
     *
     * @var string
     */
    public string $syslogServerProfileId;
    /**
     * @var string
     */
    public string $address;
    /**
     * Port number of the syslog server
     *
     * @var int
     */
    public int $port = '514';
    /**
     * Facility of the syslog server
     *
     * @var string
     */
    public string $facility = 'Keep_Original';
    /**
     * Priority of the log messages
     *
     * @var string
     */
    public string $priority = 'Error';
    /**
     * Flow Level of the syslog
     *
     * @var string
     */
    public string $flowLevel = 'GENERAL_LOGS';
    /**
     * Protocol of the syslog server
     *
     * @var string
     */
    public string $protocol = 'IPPROTO_TCP';
    /**
     * @var string
     */
    public string $secondaryAddress;
    /**
     * Secondary Server Port of the syslog server
     *
     * @var int
     */
    public int $secondaryPort = '514';
    /**
     * Secondary Server Protocol of the syslog server
     *
     * @var string
     */
    public string $secondaryProtocol = 'IPPROTO_TCP';
}