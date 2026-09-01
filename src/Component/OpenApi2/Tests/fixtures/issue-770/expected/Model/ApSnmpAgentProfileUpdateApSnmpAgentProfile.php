<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApSnmpAgentProfileUpdateApSnmpAgentProfile
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
     * @var list<ApSnmpAgentProfileApSnmpCommunity>
     */
    public array $snmpV2Agent;
    /**
     * @var list<ApSnmpAgentProfileApSnmpUser>
     */
    public array $snmpV3Agent;
}