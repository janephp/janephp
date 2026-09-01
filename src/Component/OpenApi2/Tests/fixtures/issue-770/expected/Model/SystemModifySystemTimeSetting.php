<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemModifySystemTimeSetting
{
    /**
     * Primary NtpServer address
     *
     * @var string
     */
    public string $ntpServer;
    /**
     * Secondary NtpServer address
     *
     * @var string
     */
    public string $secondaryNtpServer;
    /**
     * Third NtpServer address
     *
     * @var string
     */
    public string $thirdNtpServer;
    /**
     * System defined time zone, please refer to the 'Overview > Time Zone' list
     *
     * @var string
     */
    public string $timezone;
    /**
     * @var SystemAuthenticationKey
     */
    public SystemAuthenticationKey $authenticationKey;
    /**
     * @var SystemAuthenticationKey
     */
    public SystemAuthenticationKey $secondaryAuthenticationKey;
    /**
     * @var SystemAuthenticationKey
     */
    public SystemAuthenticationKey $thirdAuthenticationKey;
}