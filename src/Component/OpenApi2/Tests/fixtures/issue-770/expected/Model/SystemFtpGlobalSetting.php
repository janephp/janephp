<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemFtpGlobalSetting
{
    /**
     * enable logging to remote syslog server
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * ftpInterval
     *
     * @var string
     */
    public string $ftpInterval;
    /**
     * Identifier of the FTP Server
     *
     * @var string
     */
    public string $ftpId;
}