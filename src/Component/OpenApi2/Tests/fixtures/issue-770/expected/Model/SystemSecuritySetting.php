<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemSecuritySetting
{
    /**
     * Captcha setting
     *
     * @var bool
     */
    public bool $captchaEnabled;
    /**
     * @var int
     */
    public int $maxInteractiveConcurrentSessions;
    /**
     * @var int
     */
    public int $maxPublicApiConcurrentSessions;
    /**
     * @var int
     */
    public int $absoluteSessionTimeout;
    /**
     * SSH authentication method
     *
     * @var string
     */
    public string $sshAuthMethod;
}