<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneApSnmpOptions
{
    /**
     * Enable AP SNMP
     *
     * @var bool
     */
    public bool $apSnmpEnabled;
    /**
     * The config type of SNMP
     *
     * @var string
     */
    public string $snmpConfigType = 'CUSTOM';
    /**
     * @var string
     */
    public string $apSnmpAgentProfileId;
    /**
     * Community List of the SNMP V2 Agent.
     *
     * @var list<CommonSnmpCommunity>
     */
    public array $snmpV2Agent;
    /**
     * User List of the SNMP V3 Agent.
     *
     * @var list<ZoneSnmpUser>
     */
    public array $snmpV3Agent;
}