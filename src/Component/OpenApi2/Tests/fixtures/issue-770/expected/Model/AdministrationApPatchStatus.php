<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationApPatchStatus
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
     * @var ClusterbladeClusterOperationProgress
     */
    protected $clusterOperationProgress;
    /**
     * @return ClusterbladeClusterOperationProgress
     */
    public function getClusterOperationProgress(): ClusterbladeClusterOperationProgress
    {
        return $this->clusterOperationProgress;
    }
    /**
     * @param ClusterbladeClusterOperationProgress $clusterOperationProgress
     *
     * @return self
     */
    public function setClusterOperationProgress(ClusterbladeClusterOperationProgress $clusterOperationProgress): self
    {
        $this->initialized['clusterOperationProgress'] = true;
        $this->clusterOperationProgress = $clusterOperationProgress;
        return $this;
    }
}