<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletBackupPolicyRecord implements AdditionalPropertiesInterface
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
     * The unique identifier for the Droplet.
     *
     * @var int
     */
    protected $dropletId;
    /**
     * A boolean value indicating whether backups are enabled for the Droplet.
     *
     * @var bool
     */
    protected $backupEnabled;
    /**
     * @var DropletBackupPolicyRecordBackupPolicy
     */
    protected $backupPolicy;
    /**
     * @var DropletBackupPolicyRecordNextBackupWindow
     */
    protected $nextBackupWindow;
    /**
     * The unique identifier for the Droplet.
     *
     * @return int
     */
    public function getDropletId(): int
    {
        return $this->dropletId;
    }
    /**
     * The unique identifier for the Droplet.
     *
     * @param int $dropletId
     *
     * @return self
     */
    public function setDropletId(int $dropletId): self
    {
        $this->initialized['dropletId'] = true;
        $this->dropletId = $dropletId;
        return $this;
    }
    /**
     * A boolean value indicating whether backups are enabled for the Droplet.
     *
     * @return bool
     */
    public function getBackupEnabled(): bool
    {
        return $this->backupEnabled;
    }
    /**
     * A boolean value indicating whether backups are enabled for the Droplet.
     *
     * @param bool $backupEnabled
     *
     * @return self
     */
    public function setBackupEnabled(bool $backupEnabled): self
    {
        $this->initialized['backupEnabled'] = true;
        $this->backupEnabled = $backupEnabled;
        return $this;
    }
    /**
     * @return DropletBackupPolicyRecordBackupPolicy
     */
    public function getBackupPolicy(): DropletBackupPolicyRecordBackupPolicy
    {
        return $this->backupPolicy;
    }
    /**
     * @param DropletBackupPolicyRecordBackupPolicy $backupPolicy
     *
     * @return self
     */
    public function setBackupPolicy(DropletBackupPolicyRecordBackupPolicy $backupPolicy): self
    {
        $this->initialized['backupPolicy'] = true;
        $this->backupPolicy = $backupPolicy;
        return $this;
    }
    /**
     * @return DropletBackupPolicyRecordNextBackupWindow
     */
    public function getNextBackupWindow(): DropletBackupPolicyRecordNextBackupWindow
    {
        return $this->nextBackupWindow;
    }
    /**
     * @param DropletBackupPolicyRecordNextBackupWindow $nextBackupWindow
     *
     * @return self
     */
    public function setNextBackupWindow(DropletBackupPolicyRecordNextBackupWindow $nextBackupWindow): self
    {
        $this->initialized['nextBackupWindow'] = true;
        $this->nextBackupWindow = $nextBackupWindow;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['dropletId' => ['droplet_id', 'getDropletId', 'setDropletId'], 'backupEnabled' => ['backup_enabled', 'getBackupEnabled', 'setBackupEnabled'], 'backupPolicy' => ['backup_policy', 'getBackupPolicy', 'setBackupPolicy'], 'nextBackupWindow' => ['next_backup_window', 'getNextBackupWindow', 'setNextBackupWindow']];
    }
}