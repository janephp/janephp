<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSnmpAgentProfileCreateApSnmpAgentProfile
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
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var list<ApSnmpAgentProfileApSnmpCommunity>
     */
    protected $snmpV2Agent;
    /**
     * @var list<ApSnmpAgentProfileApSnmpUser>
     */
    protected $snmpV3Agent;
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return list<ApSnmpAgentProfileApSnmpCommunity>
     */
    public function getSnmpV2Agent(): array
    {
        return $this->snmpV2Agent;
    }
    /**
     * @param list<ApSnmpAgentProfileApSnmpCommunity> $snmpV2Agent
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
     * @return list<ApSnmpAgentProfileApSnmpUser>
     */
    public function getSnmpV3Agent(): array
    {
        return $this->snmpV3Agent;
    }
    /**
     * @param list<ApSnmpAgentProfileApSnmpUser> $snmpV3Agent
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