<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDropletBackupPolicy extends \ArrayObject
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
     * @var DropletBackupPolicyRecord
     */
    protected $policy;
    /**
     * @return DropletBackupPolicyRecord
     */
    public function getPolicy(): DropletBackupPolicyRecord
    {
        return $this->policy;
    }
    /**
     * @param DropletBackupPolicyRecord $policy
     *
     * @return self
     */
    public function setPolicy(DropletBackupPolicyRecord $policy): self
    {
        $this->initialized['policy'] = true;
        $this->policy = $policy;
        return $this;
    }
}