<?php

namespace Jane\Generated\DigitalOcean\Model;

class MysqlIncrementalBackup extends \ArrayObject
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
     * Enable periodic incremental backups. When enabled, full_backup_week_schedule must be set. Incremental backups only store changes since the last backup, making them faster and more storage-efficient than full backups. This is particularly useful for large databases where daily full backups would be too time-consuming or expensive.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Comma-separated list of days of the week when full backups should be created. Valid values: mon, tue, wed, thu, fri, sat, sun. Default is null. Example : "mon,fri,sun".
     *
     * @var string
     */
    protected $fullBackupWeekSchedule;
    /**
     * Enable periodic incremental backups. When enabled, full_backup_week_schedule must be set. Incremental backups only store changes since the last backup, making them faster and more storage-efficient than full backups. This is particularly useful for large databases where daily full backups would be too time-consuming or expensive.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Enable periodic incremental backups. When enabled, full_backup_week_schedule must be set. Incremental backups only store changes since the last backup, making them faster and more storage-efficient than full backups. This is particularly useful for large databases where daily full backups would be too time-consuming or expensive.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Comma-separated list of days of the week when full backups should be created. Valid values: mon, tue, wed, thu, fri, sat, sun. Default is null. Example : "mon,fri,sun".
     *
     * @return string
     */
    public function getFullBackupWeekSchedule(): string
    {
        return $this->fullBackupWeekSchedule;
    }
    /**
     * Comma-separated list of days of the week when full backups should be created. Valid values: mon, tue, wed, thu, fri, sat, sun. Default is null. Example : "mon,fri,sun". 
     *
     * @param string $fullBackupWeekSchedule
     *
     * @return self
     */
    public function setFullBackupWeekSchedule(string $fullBackupWeekSchedule): self
    {
        $this->initialized['fullBackupWeekSchedule'] = true;
        $this->fullBackupWeekSchedule = $fullBackupWeekSchedule;
        return $this;
    }
}