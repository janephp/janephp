<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ZoneSnmpUser
{
    /**
     * name of the SNMP User.
     *
     * @var string
     */
    public string $userName;
    /**
     * authProtocol of the SNMP User.
     *
     * @var string
     */
    public string $authProtocol;
    /**
     * authPassword of the SNMP User.
     *
     * @var string
     */
    public string $authPassword;
    /**
     * privProtocol of the SNMP User.
     *
     * @var string
     */
    public string $privProtocol;
    /**
     * privPassword of the SNMP User.
     *
     * @var string
     */
    public string $privPassword;
    /**
     * read privilege of the SNMP User
     *
     * @var bool
     */
    public bool $readEnabled;
    /**
     * write privilege of the SNMP User
     *
     * @var bool
     */
    public bool $writeEnabled;
    /**
     * notification privilege of the SNMP User
     *
     * @var bool
     */
    public bool $notificationEnabled;
    /**
     * type of the notification privilege
     *
     * @var string
     */
    public string $notificationType;
    /**
     * Trap List of the SNMP User
     *
     * @var list<CommonTargetConfig>
     */
    public array $notificationTarget;
}