<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SyslogSyslogServerSetting
{
    /**
     * enable logging to remote syslog server
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * appLogFacility: Local0-Local7
     *
     * @var string
     */
    public string $appLogFacility;
    /**
     * auditLogFacility: Local0-Local7
     *
     * @var string
     */
    public string $auditLogFacility;
    /**
     * auditLogFacility: Local0-Local7
     *
     * @var string
     */
    public string $eventLogFacility;
    /**
     * appLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @var string
     */
    public string $appLogSeverity;
    /**
     * auditLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @var string
     */
    public string $auditLogSeverity;
    /**
     * otherLogSeverity: Emerg, Alert, Crit, Error, Warning, Notice, Info, Debug
     *
     * @var string
     */
    public string $otherLogSeverity;
    /**
     * forwardUEEventsMsgFormatType : COMMON, ZD
     *
     * @var string
     */
    public string $forwardUEEventsMsgFormatType;
    /**
     * @var SyslogPrimaryServer
     */
    public SyslogPrimaryServer $primaryServer;
    /**
     * @var SyslogSecondaryServer
     */
    public SyslogSecondaryServer $secondaryServer;
    /**
     * Event Filter, 0 : All events, 1 : All events except client association/disassociation events, 2 : All events above a severity
     *
     * @var int
     */
    public int $eventFilter;
    /**
     * Event Filter Severity, This only applies when the Event Filter is set to 2
     *
     * @var string
     */
    public string $eventFilterSeverity;
    /**
     * @var SyslogPriority
     */
    public SyslogPriority $priority;
}