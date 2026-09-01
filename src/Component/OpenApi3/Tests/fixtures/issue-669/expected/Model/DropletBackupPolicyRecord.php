<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletBackupPolicyRecord implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the Droplet.
     *
     * @var int
     */
    public int $dropletId;
    /**
     * A boolean value indicating whether backups are enabled for the Droplet.
     *
     * @var bool
     */
    public bool $backupEnabled;
    /**
     * @var DropletBackupPolicyRecordBackupPolicy
     */
    public DropletBackupPolicyRecordBackupPolicy $backupPolicy;
    /**
     * @var DropletBackupPolicyRecordNextBackupWindow
     */
    public DropletBackupPolicyRecordNextBackupWindow $nextBackupWindow;
    public function definedProperties(): array
    {
        return ['dropletId' => 'droplet_id', 'backupEnabled' => 'backup_enabled', 'backupPolicy' => 'backup_policy', 'nextBackupWindow' => 'next_backup_window'];
    }
}