<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class WorkflowRunUsage implements AdditionalPropertiesInterface
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
     * @var WorkflowRunUsageBillable
     */
    protected $billable;
    /**
     * @var int
     */
    protected $runDurationMs;
    /**
     * @return WorkflowRunUsageBillable
     */
    public function getBillable(): WorkflowRunUsageBillable
    {
        return $this->billable;
    }
    /**
     * @param WorkflowRunUsageBillable $billable
     *
     * @return self
     */
    public function setBillable(WorkflowRunUsageBillable $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;
        return $this;
    }
    /**
     * @return int
     */
    public function getRunDurationMs(): int
    {
        return $this->runDurationMs;
    }
    /**
     * @param int $runDurationMs
     *
     * @return self
     */
    public function setRunDurationMs(int $runDurationMs): self
    {
        $this->initialized['runDurationMs'] = true;
        $this->runDurationMs = $runDurationMs;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['billable' => ['billable', 'getBillable', 'setBillable'], 'runDurationMs' => ['run_duration_ms', 'getRunDurationMs', 'setRunDurationMs']];
    }
}