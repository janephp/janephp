<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ClusterbladeClusterOperationProgress
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
}