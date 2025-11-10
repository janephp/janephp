<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladeClusterOperationProgress
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
}