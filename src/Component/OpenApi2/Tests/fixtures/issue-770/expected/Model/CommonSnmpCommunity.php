<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonSnmpCommunity
{
    /**
     * name of the SNMP Community.
     *
     * @var string
     */
    public string $communityName;
    /**
     * read privilege of the SNMP Coummunity
     *
     * @var bool
     */
    public bool $readEnabled;
    /**
     * write privilege of the SNMP Coummunity
     *
     * @var bool
     */
    public bool $writeEnabled;
    /**
     * notification privilege of the SNMP Coummunity
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
     * Trap List of the SNMP Coummunity
     *
     * @var list<CommonTargetConfig>
     */
    public array $notificationTarget;
}