<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MysqlIncrementalBackup implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Enable periodic incremental backups. When enabled, full_backup_week_schedule must be set. Incremental backups only store changes since the last backup, making them faster and more storage-efficient than full backups. This is particularly useful for large databases where daily full backups would be too time-consuming or expensive.
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * Comma-separated list of days of the week when full backups should be created. Valid values: mon, tue, wed, thu, fri, sat, sun. Default is null. Example : "mon,fri,sun".
     *
     * @var string
     */
    public string $fullBackupWeekSchedule;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled', 'fullBackupWeekSchedule' => 'full_backup_week_schedule'];
    }
}