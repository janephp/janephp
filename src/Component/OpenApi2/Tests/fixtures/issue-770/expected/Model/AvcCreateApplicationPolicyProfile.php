<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AvcCreateApplicationPolicyProfile
{
    /**
     * Identifier of the System (root) domain or partner managed domain to which the Application Policy Profile belongs
     *
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
     * @var list<AvcApplicationRule>
     */
    public array $applicationRules;
    /**
     * Send ARC logs from AP to external syslog server
     *
     * @var bool
     */
    public bool $avcLogEnable;
    /**
     * Send ARC logs from AP to SmartZone
     *
     * @var bool
     */
    public bool $avcEventEnable;
}