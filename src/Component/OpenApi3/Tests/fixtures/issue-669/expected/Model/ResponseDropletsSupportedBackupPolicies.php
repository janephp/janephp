<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDropletsSupportedBackupPolicies extends \ArrayObject
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
     * @var list<SupportedDropletBackupPolicy>
     */
    protected $supportedPolicies;
    /**
     * @return list<SupportedDropletBackupPolicy>
     */
    public function getSupportedPolicies(): array
    {
        return $this->supportedPolicies;
    }
    /**
     * @param list<SupportedDropletBackupPolicy> $supportedPolicies
     *
     * @return self
     */
    public function setSupportedPolicies(array $supportedPolicies): self
    {
        $this->initialized['supportedPolicies'] = true;
        $this->supportedPolicies = $supportedPolicies;
        return $this;
    }
}