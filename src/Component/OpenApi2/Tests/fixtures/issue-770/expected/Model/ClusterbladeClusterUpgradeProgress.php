<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladeClusterUpgradeProgress
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
     * @var string
     */
    protected $operation;
    /**
     * overallProgress of clusterOperationProgress
     *
     * @var int
     */
    protected $overallProgress;
    /**
     * @var ClusterbladePreviousOperationRecord
     */
    protected $previousOperationRecord;
    /**
     * isSelfBladeRebooting of clusterOperationProgress
     *
     * @var bool
     */
    protected $isSelfBladeRebooting;
    /**
     * bladeProgressMap of clusterOperationProgress
     *
     * @var list<ClusterbladeBladeProgress>
     */
    protected $bladeProgresss;
    /**
     * clusterSubTaskState of clusterOperationProgress
     *
     * @var string
     */
    protected $clusterSubTaskState;
    /**
     * clusterOperationBlockUI of clusterOperationProgress
     *
     * @var bool
     */
    protected $clusterOperationBlockUI;
    /**
     * clusterOperationDisplayMsg of clusterOperationProgress
     *
     * @var string
     */
    protected $clusterOperationDisplayMsg;
    /**
     * @return string
     */
    public function getOperation(): string
    {
        return $this->operation;
    }
    /**
     * @param string $operation
     *
     * @return self
     */
    public function setOperation(string $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;
        return $this;
    }
    /**
     * overallProgress of clusterOperationProgress
     *
     * @return int
     */
    public function getOverallProgress(): int
    {
        return $this->overallProgress;
    }
    /**
     * overallProgress of clusterOperationProgress
     *
     * @param int $overallProgress
     *
     * @return self
     */
    public function setOverallProgress(int $overallProgress): self
    {
        $this->initialized['overallProgress'] = true;
        $this->overallProgress = $overallProgress;
        return $this;
    }
    /**
     * @return ClusterbladePreviousOperationRecord
     */
    public function getPreviousOperationRecord(): ClusterbladePreviousOperationRecord
    {
        return $this->previousOperationRecord;
    }
    /**
     * @param ClusterbladePreviousOperationRecord $previousOperationRecord
     *
     * @return self
     */
    public function setPreviousOperationRecord(ClusterbladePreviousOperationRecord $previousOperationRecord): self
    {
        $this->initialized['previousOperationRecord'] = true;
        $this->previousOperationRecord = $previousOperationRecord;
        return $this;
    }
    /**
     * isSelfBladeRebooting of clusterOperationProgress
     *
     * @return bool
     */
    public function getIsSelfBladeRebooting(): bool
    {
        return $this->isSelfBladeRebooting;
    }
    /**
     * isSelfBladeRebooting of clusterOperationProgress
     *
     * @param bool $isSelfBladeRebooting
     *
     * @return self
     */
    public function setIsSelfBladeRebooting(bool $isSelfBladeRebooting): self
    {
        $this->initialized['isSelfBladeRebooting'] = true;
        $this->isSelfBladeRebooting = $isSelfBladeRebooting;
        return $this;
    }
    /**
     * bladeProgressMap of clusterOperationProgress
     *
     * @return list<ClusterbladeBladeProgress>
     */
    public function getBladeProgresss(): array
    {
        return $this->bladeProgresss;
    }
    /**
     * bladeProgressMap of clusterOperationProgress
     *
     * @param list<ClusterbladeBladeProgress> $bladeProgresss
     *
     * @return self
     */
    public function setBladeProgresss(array $bladeProgresss): self
    {
        $this->initialized['bladeProgresss'] = true;
        $this->bladeProgresss = $bladeProgresss;
        return $this;
    }
    /**
     * clusterSubTaskState of clusterOperationProgress
     *
     * @return string
     */
    public function getClusterSubTaskState(): string
    {
        return $this->clusterSubTaskState;
    }
    /**
     * clusterSubTaskState of clusterOperationProgress
     *
     * @param string $clusterSubTaskState
     *
     * @return self
     */
    public function setClusterSubTaskState(string $clusterSubTaskState): self
    {
        $this->initialized['clusterSubTaskState'] = true;
        $this->clusterSubTaskState = $clusterSubTaskState;
        return $this;
    }
    /**
     * clusterOperationBlockUI of clusterOperationProgress
     *
     * @return bool
     */
    public function getClusterOperationBlockUI(): bool
    {
        return $this->clusterOperationBlockUI;
    }
    /**
     * clusterOperationBlockUI of clusterOperationProgress
     *
     * @param bool $clusterOperationBlockUI
     *
     * @return self
     */
    public function setClusterOperationBlockUI(bool $clusterOperationBlockUI): self
    {
        $this->initialized['clusterOperationBlockUI'] = true;
        $this->clusterOperationBlockUI = $clusterOperationBlockUI;
        return $this;
    }
    /**
     * clusterOperationDisplayMsg of clusterOperationProgress
     *
     * @return string
     */
    public function getClusterOperationDisplayMsg(): string
    {
        return $this->clusterOperationDisplayMsg;
    }
    /**
     * clusterOperationDisplayMsg of clusterOperationProgress
     *
     * @param string $clusterOperationDisplayMsg
     *
     * @return self
     */
    public function setClusterOperationDisplayMsg(string $clusterOperationDisplayMsg): self
    {
        $this->initialized['clusterOperationDisplayMsg'] = true;
        $this->clusterOperationDisplayMsg = $clusterOperationDisplayMsg;
        return $this;
    }
}