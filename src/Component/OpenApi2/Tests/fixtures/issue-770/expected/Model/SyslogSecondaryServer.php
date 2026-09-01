<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SyslogSecondaryServer
{
    /**
     * address of the syslog server.
     *
     * @var string
     */
    public string $host;
    /**
     * port number of the syslog server
     *
     * @var int
     */
    public int $port;
    /**
     * protocol of the syslog server
     *
     * @var string
     */
    public string $protocol;
    /**
     * The redundancy mode of syslog server
     *
     * @var string
     */
    public string $redundancyMode;
}