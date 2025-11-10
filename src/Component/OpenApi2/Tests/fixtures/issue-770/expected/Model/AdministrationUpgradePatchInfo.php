<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationUpgradePatchInfo
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
     * @var ClusterbladeUploadPatchInfo
     */
    protected $uploadPatchInfo;
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
    /**
     * @return ClusterbladeUploadPatchInfo
     */
    public function getUploadPatchInfo(): ClusterbladeUploadPatchInfo
    {
        return $this->uploadPatchInfo;
    }
    /**
     * @param ClusterbladeUploadPatchInfo $uploadPatchInfo
     *
     * @return self
     */
    public function setUploadPatchInfo(ClusterbladeUploadPatchInfo $uploadPatchInfo): self
    {
        $this->initialized['uploadPatchInfo'] = true;
        $this->uploadPatchInfo = $uploadPatchInfo;
        return $this;
    }
}