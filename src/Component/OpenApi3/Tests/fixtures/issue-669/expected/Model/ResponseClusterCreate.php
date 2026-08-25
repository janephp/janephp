<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseClusterCreate implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['kubernetesCluster' => ['kubernetes_cluster', 'getKubernetesCluster', 'setKubernetesCluster']];
    }
}