<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseBackup extends \ArrayObject
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
     * The name of an existing database cluster from which the backup will be restored.
     *
     * @var string
     */
    protected $databaseName;
    /**
     * The timestamp of an existing database cluster backup in ISO8601 combined date and time format. The most recent backup will be used if excluded.
     *
     * @var \DateTime
     */
    protected $backupCreatedAt;
    /**
     * The name of an existing database cluster from which the backup will be restored.
     *
     * @return string
     */
    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }
    /**
     * The name of an existing database cluster from which the backup will be restored.
     *
     * @param string $databaseName
     *
     * @return self
     */
    public function setDatabaseName(string $databaseName): self
    {
        $this->initialized['databaseName'] = true;
        $this->databaseName = $databaseName;
        return $this;
    }
    /**
     * The timestamp of an existing database cluster backup in ISO8601 combined date and time format. The most recent backup will be used if excluded.
     *
     * @return \DateTime
     */
    public function getBackupCreatedAt(): \DateTime
    {
        return $this->backupCreatedAt;
    }
    /**
     * The timestamp of an existing database cluster backup in ISO8601 combined date and time format. The most recent backup will be used if excluded.
     *
     * @param \DateTime $backupCreatedAt
     *
     * @return self
     */
    public function setBackupCreatedAt(\DateTime $backupCreatedAt): self
    {
        $this->initialized['backupCreatedAt'] = true;
        $this->backupCreatedAt = $backupCreatedAt;
        return $this;
    }
}