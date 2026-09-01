<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseBackups implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Backup>
     */
    public array $backups;
    /**
     * @var ResponseDatabaseBackupsScheduledBackupTime
     */
    public ResponseDatabaseBackupsScheduledBackupTime $scheduledBackupTime;
    /**
     * If a backup is currently in progress, this attribute shows the percentage of completion. If no backup is in progress, this attribute will be hidden.
     *
     * @var string
     */
    public string $backupProgress;
    public function definedProperties(): array
    {
        return ['backups' => 'backups', 'scheduledBackupTime' => 'scheduled_backup_time', 'backupProgress' => 'backup_progress'];
    }
}