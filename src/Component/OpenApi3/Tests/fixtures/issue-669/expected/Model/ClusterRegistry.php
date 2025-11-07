<?php

namespace Jane\Generated\DigitalOcean\Model;

class ClusterRegistry extends \ArrayObject
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
     * An array containing the UUIDs of Kubernetes clusters.
     *
     * @var list<string>
     */
    protected $clusterUuids;
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
}