<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApSnmpAgentProfileApSnmpUser
{
    /**
     * @var string
     */
    public string $userName;
    /**
     * @var string
     */
    public string $authProtocol;
    /**
     * @var string
     */
    public string $authPassword;
    /**
     * @var string
     */
    public string $privProtocol;
    /**
     * @var string
     */
    public string $privPassword;
    /**
     * @var bool
     */
    public bool $readEnabled;
    /**
     * @var bool
     */
    public bool $writeEnabled;
    /**
     * @var bool
     */
    public bool $notificationEnabled;
    /**
     * @var string
     */
    public string $notificationType;
    /**
     * @var list<ApSnmpAgentProfileTargetConfig>
     */
    public array $notificationTarget;
}