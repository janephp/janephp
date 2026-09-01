<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanAccounting
{
    /**
     * Indicates whether accounting messages were sent through the controller
     *
     * @var bool
     */
    public bool $throughController;
    /**
     * @var bool
     */
    public bool $realmBasedAcct;
    /**
     * Accounting service or profile ID. At least one ID or name is required in the request.
     *
     * @var string
     */
    public string $id;
    /**
     * Accounting service or profile name. At least one ID or name is required in the request.
     *
     * @var string
     */
    public string $name;
    /**
     * Interval (in minutes) for sending interim updates
     *
     * @var int
     */
    public int $interimUpdateMin;
    /**
     * Indicates whether accounting delay time is enabled
     *
     * @var bool
     */
    public bool $accountingDelayEnabled;
    /**
     * Backup accounting service or profile ID. At least one backupAccountingId or backupAccountingName is required in the request when setting backup accounting service.
     *
     * @var string
     */
    public string $backupAccountingId;
    /**
     * Backup accounting service or profile name. At least one backupAccountingId or backupAccountingName is required in the request when setting backup accounting service.
     *
     * @var string
     */
    public string $backupAccountingName;
}