<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionEnableBackups implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    public string $type;
    /**
     * @var DropletActionEnableBackupsBackupPolicy
     */
    public DropletActionEnableBackupsBackupPolicy $backupPolicy;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'backupPolicy' => 'backup_policy'];
    }
}