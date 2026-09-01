<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventManagementSingleEventSetting
{
    /**
     * Event code
     *
     * @var int
     */
    public int $eventCode;
    /**
     * Event severity
     *
     * @var string
     */
    public string $severity;
    /**
     * Event category
     *
     * @var string
     */
    public string $category;
    /**
     * Event type
     *
     * @var string
     */
    public string $type;
    /**
     * Enable/Disable Email sending for this event
     *
     * @var bool
     */
    public bool $triggerEmail;
    /**
     * Enable/Disable SNMP function for this event
     *
     * @var bool
     */
    public bool $triggerTrap;
    /**
     * Enable/Disable DB persistence for this event
     *
     * @var bool
     */
    public bool $dbPersistence;
    /**
     * Enable/Disable override event system settings by zone level
     *
     * @var bool
     */
    public bool $zoneOverride;
    /**
     * Enable/Disable override event system settings by domain level
     *
     * @var bool
     */
    public bool $domainOverride;
    /**
     * Event OID
     *
     * @var string
     */
    public string $oid;
    /**
     * Event description
     *
     * @var string
     */
    public string $configPageDesc;
}