<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseBackupsScheduledBackupTime implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The hour of the day when the backup is scheduled (in UTC).
     *
     * @var int
     */
    public int $backupHour;
    /**
     * The minute of the hour when the backup is scheduled.
     *
     * @var int
     */
    public int $backupMinute;
    /**
     * The frequency, in hours, at which backups are taken.
     *
     * @var int
     */
    public int $backupIntervalHours;
    public function definedProperties(): array
    {
        return ['backupHour' => 'backup_hour', 'backupMinute' => 'backup_minute', 'backupIntervalHours' => 'backup_interval_hours'];
    }
}