<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSnmpAgentProfileApSnmpCommunity
{
    /**
     * @var string
     */
    public string $communityName;
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