<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladeClusterUpgradeProgress
{
    /**
     * @var string
     */
    public string $operation;
    /**
     * overallProgress of clusterOperationProgress
     *
     * @var int
     */
    public int $overallProgress;
    /**
     * @var ClusterbladePreviousOperationRecord
     */
    public ClusterbladePreviousOperationRecord $previousOperationRecord;
    /**
     * isSelfBladeRebooting of clusterOperationProgress
     *
     * @var bool
     */
    public bool $isSelfBladeRebooting;
    /**
     * bladeProgressMap of clusterOperationProgress
     *
     * @var list<ClusterbladeBladeProgress>
     */
    public array $bladeProgresss;
    /**
     * clusterSubTaskState of clusterOperationProgress
     *
     * @var string
     */
    public string $clusterSubTaskState;
    /**
     * clusterOperationBlockUI of clusterOperationProgress
     *
     * @var bool
     */
    public bool $clusterOperationBlockUI;
    /**
     * clusterOperationDisplayMsg of clusterOperationProgress
     *
     * @var string
     */
    public string $clusterOperationDisplayMsg;
}