<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAvailableUpgrades implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['availableUpgradeVersions' => ['available_upgrade_versions', 'getAvailableUpgradeVersions', 'setAvailableUpgradeVersions']];
    }
}