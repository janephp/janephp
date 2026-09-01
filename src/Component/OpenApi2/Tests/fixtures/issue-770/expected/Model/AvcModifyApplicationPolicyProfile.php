<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcModifyApplicationPolicyProfile
{
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