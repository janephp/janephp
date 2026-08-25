<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseBackupsScheduledBackupTime implements AdditionalPropertiesInterface
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
     * The hour of the day when the backup is scheduled (in UTC).
     *
     * @var int
     */
    protected $backupHour;
    /**
     * The minute of the hour when the backup is scheduled.
     *
     * @var int
     */
    protected $backupMinute;
    /**
     * The frequency, in hours, at which backups are taken.
     *
     * @var int
     */
    protected $backupIntervalHours;
    /**
     * The hour of the day when the backup is scheduled (in UTC).
     *
     * @return int
     */
    public function getBackupHour(): int
    {
        return $this->backupHour;
    }
    /**
     * The hour of the day when the backup is scheduled (in UTC).
     *
     * @param int $backupHour
     *
     * @return self
     */
    public function setBackupHour(int $backupHour): self
    {
        $this->initialized['backupHour'] = true;
        $this->backupHour = $backupHour;
        return $this;
    }
    /**
     * The minute of the hour when the backup is scheduled.
     *
     * @return int
     */
    public function getBackupMinute(): int
    {
        return $this->backupMinute;
    }
    /**
     * The minute of the hour when the backup is scheduled.
     *
     * @param int $backupMinute
     *
     * @return self
     */
    public function setBackupMinute(int $backupMinute): self
    {
        $this->initialized['backupMinute'] = true;
        $this->backupMinute = $backupMinute;
        return $this;
    }
    /**
     * The frequency, in hours, at which backups are taken.
     *
     * @return int
     */
    public function getBackupIntervalHours(): int
    {
        return $this->backupIntervalHours;
    }
    /**
     * The frequency, in hours, at which backups are taken.
     *
     * @param int $backupIntervalHours
     *
     * @return self
     */
    public function setBackupIntervalHours(int $backupIntervalHours): self
    {
        $this->initialized['backupIntervalHours'] = true;
        $this->backupIntervalHours = $backupIntervalHours;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['backupHour' => ['backup_hour', 'getBackupHour', 'setBackupHour'], 'backupMinute' => ['backup_minute', 'getBackupMinute', 'setBackupMinute'], 'backupIntervalHours' => ['backup_interval_hours', 'getBackupIntervalHours', 'setBackupIntervalHours']];
    }
}