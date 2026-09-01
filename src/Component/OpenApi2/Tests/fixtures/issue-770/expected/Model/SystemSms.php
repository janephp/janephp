<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemSms
{
    /**
     * SMS Id
     *
     * @var string
     */
    public string $id;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * Server type
     *
     * @var string
     */
    public string $serverType;
    /**
     * Enabled SMS server or not
     *
     * @var int
     */
    public int $enabled;
    /**
     * Server Name
     *
     * @var string
     */
    public string $serverName;
    /**
     * Account SID
     *
     * @var string
     */
    public string $accountSid;
    /**
     * Auth Token
     *
     * @var string
     */
    public string $authToken;
    /**
     * From
     *
     * @var string
     */
    public string $from;
}