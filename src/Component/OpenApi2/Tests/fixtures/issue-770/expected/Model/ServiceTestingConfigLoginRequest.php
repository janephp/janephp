<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ServiceTestingConfigLoginRequest
{
    /**
     * password for test user
     *
     * @var string
     */
    public string $password;
    /**
     * name for test user
     *
     * @var string
     */
    public string $userName;
    /**
     * timezone offset, ex: '+8'
     *
     * @var string
     */
    public string $timeZoneUtcOffset;
    /**
     * @var string
     */
    public string $protocol;
}