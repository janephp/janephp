<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationUpgradePatchInfo
{
    /**
     * @var ClusterbladeClusterUpgradeProgress
     */
    public ClusterbladeClusterUpgradeProgress $clusterOperationProgress;
    /**
     * @var ClusterbladeUploadPatchInfo
     */
    public ClusterbladeUploadPatchInfo $uploadPatchInfo;
}