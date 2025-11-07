<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseUpdatedCluster extends \ArrayObject
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
     * @var Cluster
     */
    protected $kubernetesCluster;
    /**
     * @return Cluster
     */
    public function getKubernetesCluster(): Cluster
    {
        return $this->kubernetesCluster;
    }
    /**
     * @param Cluster $kubernetesCluster
     *
     * @return self
     */
    public function setKubernetesCluster(Cluster $kubernetesCluster): self
    {
        $this->initialized['kubernetesCluster'] = true;
        $this->kubernetesCluster = $kubernetesCluster;
        return $this;
    }
}