<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneApSnmpOptions
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
     * Enable AP SNMP
     *
     * @var bool
     */
    protected $apSnmpEnabled;
    /**
     * The config type of SNMP
     *
     * @var string
     */
    protected $snmpConfigType = 'CUSTOM';
    /**
     * @var string
     */
    protected $apSnmpAgentProfileId;
    /**
     * Community List of the SNMP V2 Agent.
     *
     * @var list<CommonSnmpCommunity>
     */
    protected $snmpV2Agent;
    /**
     * User List of the SNMP V3 Agent.
     *
     * @var list<ZoneSnmpUser>
     */
    protected $snmpV3Agent;
    /**
     * Enable AP SNMP
     *
     * @return bool
     */
    public function getApSnmpEnabled(): bool
    {
        return $this->apSnmpEnabled;
    }
    /**
     * Enable AP SNMP
     *
     * @param bool $apSnmpEnabled
     *
     * @return self
     */
    public function setApSnmpEnabled(bool $apSnmpEnabled): self
    {
        $this->initialized['apSnmpEnabled'] = true;
        $this->apSnmpEnabled = $apSnmpEnabled;
        return $this;
    }
    /**
     * The config type of SNMP
     *
     * @return string
     */
    public function getSnmpConfigType(): string
    {
        return $this->snmpConfigType;
    }
    /**
     * The config type of SNMP
     *
     * @param string $snmpConfigType
     *
     * @return self
     */
    public function setSnmpConfigType(string $snmpConfigType): self
    {
        $this->initialized['snmpConfigType'] = true;
        $this->snmpConfigType = $snmpConfigType;
        return $this;
    }
    /**
     * @return string
     */
    public function getApSnmpAgentProfileId(): string
    {
        return $this->apSnmpAgentProfileId;
    }
    /**
     * @param string $apSnmpAgentProfileId
     *
     * @return self
     */
    public function setApSnmpAgentProfileId(string $apSnmpAgentProfileId): self
    {
        $this->initialized['apSnmpAgentProfileId'] = true;
        $this->apSnmpAgentProfileId = $apSnmpAgentProfileId;
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
     * User List of the SNMP V3 Agent.
     *
     * @return list<ZoneSnmpUser>
     */
    public function getSnmpV3Agent(): array
    {
        return $this->snmpV3Agent;
    }
    /**
     * User List of the SNMP V3 Agent.
     *
     * @param list<ZoneSnmpUser> $snmpV3Agent
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