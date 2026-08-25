<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseBackups implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<Backup>
     */
    protected $backups;
    /**
     * @var ResponseDatabaseBackupsScheduledBackupTime
     */
    protected $scheduledBackupTime;
    /**
     * If a backup is currently in progress, this attribute shows the percentage of completion. If no backup is in progress, this attribute will be hidden.
     *
     * @var string
     */
    protected $backupProgress;
    /**
     * @return list<Backup>
     */
    public function getBackups(): array
    {
        return $this->backups;
    }
    /**
     * @param list<Backup> $backups
     *
     * @return self
     */
    public function setBackups(array $backups): self
    {
        $this->initialized['backups'] = true;
        $this->backups = $backups;
        return $this;
    }
    /**
     * @return ResponseDatabaseBackupsScheduledBackupTime
     */
    public function getScheduledBackupTime(): ResponseDatabaseBackupsScheduledBackupTime
    {
        return $this->scheduledBackupTime;
    }
    /**
     * @param ResponseDatabaseBackupsScheduledBackupTime $scheduledBackupTime
     *
     * @return self
     */
    public function setScheduledBackupTime(ResponseDatabaseBackupsScheduledBackupTime $scheduledBackupTime): self
    {
        $this->initialized['scheduledBackupTime'] = true;
        $this->scheduledBackupTime = $scheduledBackupTime;
        return $this;
    }
    /**
     * If a backup is currently in progress, this attribute shows the percentage of completion. If no backup is in progress, this attribute will be hidden.
     *
     * @return string
     */
    public function getBackupProgress(): string
    {
        return $this->backupProgress;
    }
    /**
     * If a backup is currently in progress, this attribute shows the percentage of completion. If no backup is in progress, this attribute will be hidden.
     *
     * @param string $backupProgress
     *
     * @return self
     */
    public function setBackupProgress(string $backupProgress): self
    {
        $this->initialized['backupProgress'] = true;
        $this->backupProgress = $backupProgress;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['backups' => ['backups', 'getBackups', 'setBackups'], 'scheduledBackupTime' => ['scheduled_backup_time', 'getScheduledBackupTime', 'setScheduledBackupTime'], 'backupProgress' => ['backup_progress', 'getBackupProgress', 'setBackupProgress']];
    }
}