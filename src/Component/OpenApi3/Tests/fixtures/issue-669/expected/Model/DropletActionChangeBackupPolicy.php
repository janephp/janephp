<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionChangeBackupPolicy implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    public string $type;
    /**
     * @var DropletActionChangeBackupPolicyBackupPolicy
     */
    public DropletActionChangeBackupPolicyBackupPolicy $backupPolicy;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'backupPolicy' => 'backup_policy'];
    }
}