<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionEnableBackups implements AdditionalPropertiesInterface
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
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    protected $type;
    /**
     * @var DropletActionEnableBackupsBackupPolicy
     */
    protected $backupPolicy;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of action to initiate for the Droplet.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return DropletActionEnableBackupsBackupPolicy
     */
    public function getBackupPolicy(): DropletActionEnableBackupsBackupPolicy
    {
        return $this->backupPolicy;
    }
    /**
     * @param DropletActionEnableBackupsBackupPolicy $backupPolicy
     *
     * @return self
     */
    public function setBackupPolicy(DropletActionEnableBackupsBackupPolicy $backupPolicy): self
    {
        $this->initialized['backupPolicy'] = true;
        $this->backupPolicy = $backupPolicy;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'backupPolicy' => ['backup_policy', 'getBackupPolicy', 'setBackupPolicy']];
    }
}