<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventManagementSingleEventSetting
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
     * Event code
     *
     * @var int
     */
    protected $eventCode;
    /**
     * Event severity
     *
     * @var string
     */
    protected $severity;
    /**
     * Event category
     *
     * @var string
     */
    protected $category;
    /**
     * Event type
     *
     * @var string
     */
    protected $type;
    /**
     * Enable/Disable Email sending for this event
     *
     * @var bool
     */
    protected $triggerEmail;
    /**
     * Enable/Disable SNMP function for this event
     *
     * @var bool
     */
    protected $triggerTrap;
    /**
     * Enable/Disable DB persistence for this event
     *
     * @var bool
     */
    protected $dbPersistence;
    /**
     * Enable/Disable override event system settings by zone level
     *
     * @var bool
     */
    protected $zoneOverride;
    /**
     * Enable/Disable override event system settings by domain level
     *
     * @var bool
     */
    protected $domainOverride;
    /**
     * Event OID
     *
     * @var string
     */
    protected $oid;
    /**
     * Event description
     *
     * @var string
     */
    protected $configPageDesc;
    /**
     * Event code
     *
     * @return int
     */
    public function getEventCode(): int
    {
        return $this->eventCode;
    }
    /**
     * Event code
     *
     * @param int $eventCode
     *
     * @return self
     */
    public function setEventCode(int $eventCode): self
    {
        $this->initialized['eventCode'] = true;
        $this->eventCode = $eventCode;
        return $this;
    }
    /**
     * Event severity
     *
     * @return string
     */
    public function getSeverity(): string
    {
        return $this->severity;
    }
    /**
     * Event severity
     *
     * @param string $severity
     *
     * @return self
     */
    public function setSeverity(string $severity): self
    {
        $this->initialized['severity'] = true;
        $this->severity = $severity;
        return $this;
    }
    /**
     * Event category
     *
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * Event category
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Event type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Event type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Enable/Disable Email sending for this event
     *
     * @return bool
     */
    public function getTriggerEmail(): bool
    {
        return $this->triggerEmail;
    }
    /**
     * Enable/Disable Email sending for this event
     *
     * @param bool $triggerEmail
     *
     * @return self
     */
    public function setTriggerEmail(bool $triggerEmail): self
    {
        $this->initialized['triggerEmail'] = true;
        $this->triggerEmail = $triggerEmail;
        return $this;
    }
    /**
     * Enable/Disable SNMP function for this event
     *
     * @return bool
     */
    public function getTriggerTrap(): bool
    {
        return $this->triggerTrap;
    }
    /**
     * Enable/Disable SNMP function for this event
     *
     * @param bool $triggerTrap
     *
     * @return self
     */
    public function setTriggerTrap(bool $triggerTrap): self
    {
        $this->initialized['triggerTrap'] = true;
        $this->triggerTrap = $triggerTrap;
        return $this;
    }
    /**
     * Enable/Disable DB persistence for this event
     *
     * @return bool
     */
    public function getDbPersistence(): bool
    {
        return $this->dbPersistence;
    }
    /**
     * Enable/Disable DB persistence for this event
     *
     * @param bool $dbPersistence
     *
     * @return self
     */
    public function setDbPersistence(bool $dbPersistence): self
    {
        $this->initialized['dbPersistence'] = true;
        $this->dbPersistence = $dbPersistence;
        return $this;
    }
    /**
     * Enable/Disable override event system settings by zone level
     *
     * @return bool
     */
    public function getZoneOverride(): bool
    {
        return $this->zoneOverride;
    }
    /**
     * Enable/Disable override event system settings by zone level
     *
     * @param bool $zoneOverride
     *
     * @return self
     */
    public function setZoneOverride(bool $zoneOverride): self
    {
        $this->initialized['zoneOverride'] = true;
        $this->zoneOverride = $zoneOverride;
        return $this;
    }
    /**
     * Enable/Disable override event system settings by domain level
     *
     * @return bool
     */
    public function getDomainOverride(): bool
    {
        return $this->domainOverride;
    }
    /**
     * Enable/Disable override event system settings by domain level
     *
     * @param bool $domainOverride
     *
     * @return self
     */
    public function setDomainOverride(bool $domainOverride): self
    {
        $this->initialized['domainOverride'] = true;
        $this->domainOverride = $domainOverride;
        return $this;
    }
    /**
     * Event OID
     *
     * @return string
     */
    public function getOid(): string
    {
        return $this->oid;
    }
    /**
     * Event OID
     *
     * @param string $oid
     *
     * @return self
     */
    public function setOid(string $oid): self
    {
        $this->initialized['oid'] = true;
        $this->oid = $oid;
        return $this;
    }
    /**
     * Event description
     *
     * @return string
     */
    public function getConfigPageDesc(): string
    {
        return $this->configPageDesc;
    }
    /**
     * Event description
     *
     * @param string $configPageDesc
     *
     * @return self
     */
    public function setConfigPageDesc(string $configPageDesc): self
    {
        $this->initialized['configPageDesc'] = true;
        $this->configPageDesc = $configPageDesc;
        return $this;
    }
}