<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class WorkflowRunUsageBillableWINDOWS implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $totalMs;
    /**
     * @var int
     */
    protected $jobs;
    /**
     * @return int
     */
    public function getTotalMs(): int
    {
        return $this->totalMs;
    }
    /**
     * @param int $totalMs
     *
     * @return self
     */
    public function setTotalMs(int $totalMs): self
    {
        $this->initialized['totalMs'] = true;
        $this->totalMs = $totalMs;
        return $this;
    }
    /**
     * @return int
     */
    public function getJobs(): int
    {
        return $this->jobs;
    }
    /**
     * @param int $jobs
     *
     * @return self
     */
    public function setJobs(int $jobs): self
    {
        $this->initialized['jobs'] = true;
        $this->jobs = $jobs;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalMs' => ['total_ms', 'getTotalMs', 'setTotalMs'], 'jobs' => ['jobs', 'getJobs', 'setJobs']];
    }
}