<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingCluster implements AdditionalPropertiesInterface
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
     * @var ClusterRead
     */
    protected $kubernetesCluster;
    /**
     * @return ClusterRead
     */
    public function getKubernetesCluster(): ClusterRead
    {
        return $this->kubernetesCluster;
    }
    /**
     * @param ClusterRead $kubernetesCluster
     *
     * @return self
     */
    public function setKubernetesCluster(ClusterRead $kubernetesCluster): self
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