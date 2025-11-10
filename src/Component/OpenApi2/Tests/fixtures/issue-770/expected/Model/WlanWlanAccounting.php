<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanAccounting
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
     * Indicates whether accounting messages were sent through the controller
     *
     * @var bool
     */
    protected $throughController;
    /**
     * @var bool
     */
    protected $realmBasedAcct;
    /**
     * Accounting service or profile ID. At least one ID or name is required in the request.
     *
     * @var string
     */
    protected $id;
    /**
     * Accounting service or profile name. At least one ID or name is required in the request.
     *
     * @var string
     */
    protected $name;
    /**
     * Interval (in minutes) for sending interim updates
     *
     * @var int
     */
    protected $interimUpdateMin;
    /**
     * Indicates whether accounting delay time is enabled
     *
     * @var bool
     */
    protected $accountingDelayEnabled;
    /**
     * Backup accounting service or profile ID. At least one backupAccountingId or backupAccountingName is required in the request when setting backup accounting service.
     *
     * @var string
     */
    protected $backupAccountingId;
    /**
     * Backup accounting service or profile name. At least one backupAccountingId or backupAccountingName is required in the request when setting backup accounting service.
     *
     * @var string
     */
    protected $backupAccountingName;
    /**
     * Indicates whether accounting messages were sent through the controller
     *
     * @return bool
     */
    public function getThroughController(): bool
    {
        return $this->throughController;
    }
    /**
     * Indicates whether accounting messages were sent through the controller
     *
     * @param bool $throughController
     *
     * @return self
     */
    public function setThroughController(bool $throughController): self
    {
        $this->initialized['throughController'] = true;
        $this->throughController = $throughController;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRealmBasedAcct(): bool
    {
        return $this->realmBasedAcct;
    }
    /**
     * @param bool $realmBasedAcct
     *
     * @return self
     */
    public function setRealmBasedAcct(bool $realmBasedAcct): self
    {
        $this->initialized['realmBasedAcct'] = true;
        $this->realmBasedAcct = $realmBasedAcct;
        return $this;
    }
    /**
     * Accounting service or profile ID. At least one ID or name is required in the request.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Accounting service or profile ID. At least one ID or name is required in the request.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Accounting service or profile name. At least one ID or name is required in the request.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Accounting service or profile name. At least one ID or name is required in the request.
     *
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
     * Interval (in minutes) for sending interim updates
     *
     * @return int
     */
    public function getInterimUpdateMin(): int
    {
        return $this->interimUpdateMin;
    }
    /**
     * Interval (in minutes) for sending interim updates
     *
     * @param int $interimUpdateMin
     *
     * @return self
     */
    public function setInterimUpdateMin(int $interimUpdateMin): self
    {
        $this->initialized['interimUpdateMin'] = true;
        $this->interimUpdateMin = $interimUpdateMin;
        return $this;
    }
    /**
     * Indicates whether accounting delay time is enabled
     *
     * @return bool
     */
    public function getAccountingDelayEnabled(): bool
    {
        return $this->accountingDelayEnabled;
    }
    /**
     * Indicates whether accounting delay time is enabled
     *
     * @param bool $accountingDelayEnabled
     *
     * @return self
     */
    public function setAccountingDelayEnabled(bool $accountingDelayEnabled): self
    {
        $this->initialized['accountingDelayEnabled'] = true;
        $this->accountingDelayEnabled = $accountingDelayEnabled;
        return $this;
    }
    /**
     * Backup accounting service or profile ID. At least one backupAccountingId or backupAccountingName is required in the request when setting backup accounting service.
     *
     * @return string
     */
    public function getBackupAccountingId(): string
    {
        return $this->backupAccountingId;
    }
    /**
     * Backup accounting service or profile ID. At least one backupAccountingId or backupAccountingName is required in the request when setting backup accounting service.
     *
     * @param string $backupAccountingId
     *
     * @return self
     */
    public function setBackupAccountingId(string $backupAccountingId): self
    {
        $this->initialized['backupAccountingId'] = true;
        $this->backupAccountingId = $backupAccountingId;
        return $this;
    }
    /**
     * Backup accounting service or profile name. At least one backupAccountingId or backupAccountingName is required in the request when setting backup accounting service.
     *
     * @return string
     */
    public function getBackupAccountingName(): string
    {
        return $this->backupAccountingName;
    }
    /**
     * Backup accounting service or profile name. At least one backupAccountingId or backupAccountingName is required in the request when setting backup accounting service.
     *
     * @param string $backupAccountingName
     *
     * @return self
     */
    public function setBackupAccountingName(string $backupAccountingName): self
    {
        $this->initialized['backupAccountingName'] = true;
        $this->backupAccountingName = $backupAccountingName;
        return $this;
    }
}