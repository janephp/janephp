<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemSnmpAgentConfiguration
{
    /**
     * Enable SNMP Notifications Globally (If SNMP Notification is disabled globally, no Notification message is sent out.)
     *
     * @var bool
     */
    public bool $snmpNotificationEnabled;
    /**
     * Community List of the SNMP V2 Agent.
     *
     * @var list<CommonSnmpCommunity>
     */
    public array $snmpV2Agent;
    /**
     * User List of the SNMP V2 Agent.
     *
     * @var list<CommonSnmpUser>
     */
    public array $snmpV3Agent;
}