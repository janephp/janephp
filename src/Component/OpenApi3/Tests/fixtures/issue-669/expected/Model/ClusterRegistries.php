<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterRegistries implements AdditionalPropertiesInterface
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
     * An array containing the UUIDs of Kubernetes clusters.
     *
     * @var list<string>
     */
    protected $clusterUuids;
    /**
     * An array containing the registry names.
     *
     * @var list<string>
     */
    protected $registries;
    /**
     * An array containing the UUIDs of Kubernetes clusters.
     *
     * @return list<string>
     */
    public function getClusterUuids(): array
    {
        return $this->clusterUuids;
    }
    /**
     * An array containing the UUIDs of Kubernetes clusters.
     *
     * @param list<string> $clusterUuids
     *
     * @return self
     */
    public function setClusterUuids(array $clusterUuids): self
    {
        $this->initialized['clusterUuids'] = true;
        $this->clusterUuids = $clusterUuids;
        return $this;
    }
    /**
     * An array containing the registry names.
     *
     * @return list<string>
     */
    public function getRegistries(): array
    {
        return $this->registries;
    }
    /**
     * An array containing the registry names.
     *
     * @param list<string> $registries
     *
     * @return self
     */
    public function setRegistries(array $registries): self
    {
        $this->initialized['registries'] = true;
        $this->registries = $registries;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['clusterUuids' => ['cluster_uuids', 'getClusterUuids', 'setClusterUuids'], 'registries' => ['registries', 'getRegistries', 'setRegistries']];
    }
}