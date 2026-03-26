<?php

namespace Jane\Generated\DigitalOcean\Model;

class DropletActionChangeBackupPolicy extends \ArrayObject
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
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    protected $type;
    /**
     * @var DropletActionChangeBackupPolicyBackupPolicy
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
     * @return DropletActionChangeBackupPolicyBackupPolicy
     */
    public function getBackupPolicy(): DropletActionChangeBackupPolicyBackupPolicy
    {
        return $this->backupPolicy;
    }
    /**
     * @param DropletActionChangeBackupPolicyBackupPolicy $backupPolicy
     *
     * @return self
     */
    public function setBackupPolicy(DropletActionChangeBackupPolicyBackupPolicy $backupPolicy): self
    {
        $this->initialized['backupPolicy'] = true;
        $this->backupPolicy = $backupPolicy;
        return $this;
    }
}