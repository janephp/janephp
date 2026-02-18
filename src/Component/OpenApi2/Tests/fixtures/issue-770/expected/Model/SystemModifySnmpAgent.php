<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifySnmpAgent
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Enable SNMP Notifications Globally (If SNMP Notification is disabled globally, no Notification message is sent out.)
     *
     * @var bool
     */
    protected $snmpNotificationEnabled;
    /**
     * Community List of the SNMP V2 Agent.
     *
     * @var list<CommonSnmpCommunity>
     */
    protected $snmpV2Agent;
    /**
     * User List of the SNMP V2 Agent.
     *
     * @var list<CommonSnmpUser>
     */
    protected $snmpV3Agent;
    /**
     * Enable SNMP Notifications Globally (If SNMP Notification is disabled globally, no Notification message is sent out.)
     *
     * @return bool
     */
    public function getSnmpNotificationEnabled(): bool
    {
        return $this->snmpNotificationEnabled;
    }
    /**
     * Enable SNMP Notifications Globally (If SNMP Notification is disabled globally, no Notification message is sent out.)
     *
     * @param bool $snmpNotificationEnabled
     *
     * @return self
     */
    public function setSnmpNotificationEnabled(bool $snmpNotificationEnabled): self
    {
        $this->initialized['snmpNotificationEnabled'] = true;
        $this->snmpNotificationEnabled = $snmpNotificationEnabled;
        return $this;
    }
    /**
     * Community List of the SNMP V2 Agent.
     *
     * @return list<CommonSnmpCommunity>
     */
    public function getSnmpV2Agent(): array
    {
        return $this->snmpV2Agent;
    }
    /**
     * Community List of the SNMP V2 Agent.
     *
     * @param list<CommonSnmpCommunity> $snmpV2Agent
     *
     * @return self
     */
    public function setSnmpV2Agent(array $snmpV2Agent): self
    {
        $this->initialized['snmpV2Agent'] = true;
        $this->snmpV2Agent = $snmpV2Agent;
        return $this;
    }
    /**
     * User List of the SNMP V2 Agent.
     *
     * @return list<CommonSnmpUser>
     */
    public function getSnmpV3Agent(): array
    {
        return $this->snmpV3Agent;
    }
    /**
     * User List of the SNMP V2 Agent.
     *
     * @param list<CommonSnmpUser> $snmpV3Agent
     *
     * @return self
     */
    public function setSnmpV3Agent(array $snmpV3Agent): self
    {
        $this->initialized['snmpV3Agent'] = true;
        $this->snmpV3Agent = $snmpV3Agent;
        return $this;
    }
}