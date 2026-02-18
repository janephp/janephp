<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationUpgradeStatus
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
     * @var ClusterbladeClusterUpgradeProgress
     */
    protected $clusterOperationProgress;
    /**
     * @return ClusterbladeClusterUpgradeProgress
     */
    public function getClusterOperationProgress(): ClusterbladeClusterUpgradeProgress
    {
        return $this->clusterOperationProgress;
    }
    /**
     * @param ClusterbladeClusterUpgradeProgress $clusterOperationProgress
     *
     * @return self
     */
    public function setClusterOperationProgress(ClusterbladeClusterUpgradeProgress $clusterOperationProgress): self
    {
        $this->initialized['clusterOperationProgress'] = true;
        $this->clusterOperationProgress = $clusterOperationProgress;
        return $this;
    }
}