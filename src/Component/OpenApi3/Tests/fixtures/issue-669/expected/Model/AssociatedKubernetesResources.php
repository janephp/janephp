<?php

namespace Jane\Generated\DigitalOcean\Model;

class AssociatedKubernetesResources extends \ArrayObject
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
     * A list of names and IDs for associated load balancers that can be destroyed along with the cluster.
     *
     * @var list<AssociatedKubernetesResource>
     */
    protected $loadBalancers;
    /**
     * A list of names and IDs for associated volumes that can be destroyed along with the cluster.
     *
     * @var list<AssociatedKubernetesResource>
     */
    protected $volumes;
    /**
     * A list of names and IDs for associated volume snapshots that can be destroyed along with the cluster.
     *
     * @var list<AssociatedKubernetesResource>
     */
    protected $volumeSnapshots;
    /**
     * A list of names and IDs for associated load balancers that can be destroyed along with the cluster.
     *
     * @return list<AssociatedKubernetesResource>
     */
    public function getLoadBalancers(): array
    {
        return $this->loadBalancers;
    }
    /**
     * A list of names and IDs for associated load balancers that can be destroyed along with the cluster.
     *
     * @param list<AssociatedKubernetesResource> $loadBalancers
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
     * A list of names and IDs for associated volumes that can be destroyed along with the cluster.
     *
     * @return list<AssociatedKubernetesResource>
     */
    public function getVolumes(): array
    {
        return $this->volumes;
    }
    /**
     * A list of names and IDs for associated volumes that can be destroyed along with the cluster.
     *
     * @param list<AssociatedKubernetesResource> $volumes
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
     * A list of names and IDs for associated volume snapshots that can be destroyed along with the cluster.
     *
     * @return list<AssociatedKubernetesResource>
     */
    public function getVolumeSnapshots(): array
    {
        return $this->volumeSnapshots;
    }
    /**
     * A list of names and IDs for associated volume snapshots that can be destroyed along with the cluster.
     *
     * @param list<AssociatedKubernetesResource> $volumeSnapshots
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