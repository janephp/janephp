<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAvailableUpgrades extends \ArrayObject
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
     * @var list<KubernetesVersion>|null
     */
    protected $availableUpgradeVersions;
    /**
     * @return list<KubernetesVersion>|null
     */
    public function getAvailableUpgradeVersions(): ?array
    {
        return $this->availableUpgradeVersions;
    }
    /**
     * @param list<KubernetesVersion>|null $availableUpgradeVersions
     *
     * @return self
     */
    public function setAvailableUpgradeVersions(?array $availableUpgradeVersions): self
    {
        $this->initialized['availableUpgradeVersions'] = true;
        $this->availableUpgradeVersions = $availableUpgradeVersions;
        return $this;
    }
}