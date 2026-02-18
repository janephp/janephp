<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SyslogSyslogServerSetting
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
     * enable logging to remote syslog server
     *
     * @var bool
     */
    protected $enabled;
    /**
     * appLogFacility: Local0-Local7
     *
     * @var string
     */
    protected $appLogFacility;
    /**
     * auditLogFacility: Local0-Local7
     *
     * @var string
     */
    protected $auditLogFacility;
    /**
     * auditLogFacility: Local0-Local7
     *
     * @var string
     */
    protected $eventLogFacility;
    /**
     * appLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @var string
     */
    protected $appLogSeverity;
    /**
     * auditLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @var string
     */
    protected $auditLogSeverity;
    /**
     * otherLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @var string
     */
    protected $otherLogSeverity;
    /**
     * forwardUEEventsMsgFormatType : COMMON, ZD
     *
     * @var string
     */
    protected $forwardUEEventsMsgFormatType;
    /**
     * @var SyslogPrimaryServer
     */
    protected $primaryServer;
    /**
     * @var SyslogSecondaryServer
     */
    protected $secondaryServer;
    /**
     * Event Filter, 0 : All events, 1 : All events except client association/disassociation events, 2 : All events above a severity
     *
     * @var int
     */
    protected $eventFilter;
    /**
     * Event Filter Severity, This only applies when the Event Filter is set to 2
     *
     * @var string
     */
    protected $eventFilterSeverity;
    /**
     * @var SyslogPriority
     */
    protected $priority;
    /**
     * enable logging to remote syslog server
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * enable logging to remote syslog server
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * appLogFacility: Local0-Local7
     *
     * @return string
     */
    public function getAppLogFacility(): string
    {
        return $this->appLogFacility;
    }
    /**
     * appLogFacility: Local0-Local7
     *
     * @param string $appLogFacility
     *
     * @return self
     */
    public function setAppLogFacility(string $appLogFacility): self
    {
        $this->initialized['appLogFacility'] = true;
        $this->appLogFacility = $appLogFacility;
        return $this;
    }
    /**
     * auditLogFacility: Local0-Local7
     *
     * @return string
     */
    public function getAuditLogFacility(): string
    {
        return $this->auditLogFacility;
    }
    /**
     * auditLogFacility: Local0-Local7
     *
     * @param string $auditLogFacility
     *
     * @return self
     */
    public function setAuditLogFacility(string $auditLogFacility): self
    {
        $this->initialized['auditLogFacility'] = true;
        $this->auditLogFacility = $auditLogFacility;
        return $this;
    }
    /**
     * auditLogFacility: Local0-Local7
     *
     * @return string
     */
    public function getEventLogFacility(): string
    {
        return $this->eventLogFacility;
    }
    /**
     * auditLogFacility: Local0-Local7
     *
     * @param string $eventLogFacility
     *
     * @return self
     */
    public function setEventLogFacility(string $eventLogFacility): self
    {
        $this->initialized['eventLogFacility'] = true;
        $this->eventLogFacility = $eventLogFacility;
        return $this;
    }
    /**
     * appLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @return string
     */
    public function getAppLogSeverity(): string
    {
        return $this->appLogSeverity;
    }
    /**
     * appLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @param string $appLogSeverity
     *
     * @return self
     */
    public function setAppLogSeverity(string $appLogSeverity): self
    {
        $this->initialized['appLogSeverity'] = true;
        $this->appLogSeverity = $appLogSeverity;
        return $this;
    }
    /**
     * auditLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @return string
     */
    public function getAuditLogSeverity(): string
    {
        return $this->auditLogSeverity;
    }
    /**
     * auditLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @param string $auditLogSeverity
     *
     * @return self
     */
    public function setAuditLogSeverity(string $auditLogSeverity): self
    {
        $this->initialized['auditLogSeverity'] = true;
        $this->auditLogSeverity = $auditLogSeverity;
        return $this;
    }
    /**
     * otherLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @return string
     */
    public function getOtherLogSeverity(): string
    {
        return $this->otherLogSeverity;
    }
    /**
     * otherLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @param string $otherLogSeverity
     *
     * @return self
     */
    public function setOtherLogSeverity(string $otherLogSeverity): self
    {
        $this->initialized['otherLogSeverity'] = true;
        $this->otherLogSeverity = $otherLogSeverity;
        return $this;
    }
    /**
     * forwardUEEventsMsgFormatType : COMMON, ZD
     *
     * @return string
     */
    public function getForwardUEEventsMsgFormatType(): string
    {
        return $this->forwardUEEventsMsgFormatType;
    }
    /**
     * forwardUEEventsMsgFormatType : COMMON, ZD
     *
     * @param string $forwardUEEventsMsgFormatType
     *
     * @return self
     */
    public function setForwardUEEventsMsgFormatType(string $forwardUEEventsMsgFormatType): self
    {
        $this->initialized['forwardUEEventsMsgFormatType'] = true;
        $this->forwardUEEventsMsgFormatType = $forwardUEEventsMsgFormatType;
        return $this;
    }
    /**
     * @return SyslogPrimaryServer
     */
    public function getPrimaryServer(): SyslogPrimaryServer
    {
        return $this->primaryServer;
    }
    /**
     * @param SyslogPrimaryServer $primaryServer
     *
     * @return self
     */
    public function setPrimaryServer(SyslogPrimaryServer $primaryServer): self
    {
        $this->initialized['primaryServer'] = true;
        $this->primaryServer = $primaryServer;
        return $this;
    }
    /**
     * @return SyslogSecondaryServer
     */
    public function getSecondaryServer(): SyslogSecondaryServer
    {
        return $this->secondaryServer;
    }
    /**
     * @param SyslogSecondaryServer $secondaryServer
     *
     * @return self
     */
    public function setSecondaryServer(SyslogSecondaryServer $secondaryServer): self
    {
        $this->initialized['secondaryServer'] = true;
        $this->secondaryServer = $secondaryServer;
        return $this;
    }
    /**
     * Event Filter, 0 : All events, 1 : All events except client association/disassociation events, 2 : All events above a severity
     *
     * @return int
     */
    public function getEventFilter(): int
    {
        return $this->eventFilter;
    }
    /**
     * Event Filter, 0 : All events, 1 : All events except client association/disassociation events, 2 : All events above a severity
     *
     * @param int $eventFilter
     *
     * @return self
     */
    public function setEventFilter(int $eventFilter): self
    {
        $this->initialized['eventFilter'] = true;
        $this->eventFilter = $eventFilter;
        return $this;
    }
    /**
     * Event Filter Severity, This only applies when the Event Filter is set to 2
     *
     * @return string
     */
    public function getEventFilterSeverity(): string
    {
        return $this->eventFilterSeverity;
    }
    /**
     * Event Filter Severity, This only applies when the Event Filter is set to 2
     *
     * @param string $eventFilterSeverity
     *
     * @return self
     */
    public function setEventFilterSeverity(string $eventFilterSeverity): self
    {
        $this->initialized['eventFilterSeverity'] = true;
        $this->eventFilterSeverity = $eventFilterSeverity;
        return $this;
    }
    /**
     * @return SyslogPriority
     */
    public function getPriority(): SyslogPriority
    {
        return $this->priority;
    }
    /**
     * @param SyslogPriority $priority
     *
     * @return self
     */
    public function setPriority(SyslogPriority $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
}