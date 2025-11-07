<?php

namespace Jane\Generated\DigitalOcean\Model;

class DestroyAssociatedKubernetesResources extends \ArrayObject
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
     * A list of IDs for associated load balancers to destroy along with the cluster.
     *
     * @var list<string>
     */
    protected $loadBalancers;
    /**
     * A list of IDs for associated volumes to destroy along with the cluster.
     *
     * @var list<string>
     */
    protected $volumes;
    /**
     * A list of IDs for associated volume snapshots to destroy along with the cluster.
     *
     * @var list<string>
     */
    protected $volumeSnapshots;
    /**
     * A list of IDs for associated load balancers to destroy along with the cluster.
     *
     * @return list<string>
     */
    public function getLoadBalancers(): array
    {
        return $this->loadBalancers;
    }
    /**
     * A list of IDs for associated load balancers to destroy along with the cluster.
     *
     * @param list<string> $loadBalancers
     *
     * @return self
     */
    public function setLoadBalancers(array $loadBalancers): self
    {
        $this->initialized['loadBalancers'] = true;
        $this->loadBalancers = $loadBalancers;
        return $this;
    }
    /**
     * A list of IDs for associated volumes to destroy along with the cluster.
     *
     * @return list<string>
     */
    public function getVolumes(): array
    {
        return $this->volumes;
    }
    /**
     * A list of IDs for associated volumes to destroy along with the cluster.
     *
     * @param list<string> $volumes
     *
     * @return self
     */
    public function setVolumes(array $volumes): self
    {
        $this->initialized['volumes'] = true;
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * A list of IDs for associated volume snapshots to destroy along with the cluster.
     *
     * @return list<string>
     */
    public function getVolumeSnapshots(): array
    {
        return $this->volumeSnapshots;
    }
    /**
     * A list of IDs for associated volume snapshots to destroy along with the cluster.
     *
     * @param list<string> $volumeSnapshots
     *
     * @return self
     */
    public function setVolumeSnapshots(array $volumeSnapshots): self
    {
        $this->initialized['volumeSnapshots'] = true;
        $this->volumeSnapshots = $volumeSnapshots;
        return $this;
    }
}