<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseBackup implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of an existing database cluster from which the backup will be restored.
     *
     * @var string
     */
    public string $databaseName;
    /**
     * The timestamp of an existing database cluster backup in ISO8601 combined date and time format. The most recent backup will be used if excluded.
     *
     * @var \DateTime
     */
    public \DateTime $backupCreatedAt;
    public function definedProperties(): array
    {
        return ['databaseName' => 'database_name', 'backupCreatedAt' => 'backup_created_at'];
    }
}