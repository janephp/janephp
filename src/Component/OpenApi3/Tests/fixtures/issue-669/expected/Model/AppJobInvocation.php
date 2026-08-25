<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocation implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $jobName;
    /**
     * @var string
     */
    protected $deploymentId;
    /**
     * The phase of the job invocation
     *
     * @var string
     */
    protected $phase;
    /**
     * @var AppJobInvocationTrigger
     */
    protected $trigger;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * @var \DateTime
     */
    protected $completedAt;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getJobName(): string
    {
        return $this->jobName;
    }
    /**
     * @param string $jobName
     *
     * @return self
     */
    public function setJobName(string $jobName): self
    {
        $this->initialized['jobName'] = true;
        $this->jobName = $jobName;
        return $this;
    }
    /**
     * @return string
     */
    public function getDeploymentId(): string
    {
        return $this->deploymentId;
    }
    /**
     * @param string $deploymentId
     *
     * @return self
     */
    public function setDeploymentId(string $deploymentId): self
    {
        $this->initialized['deploymentId'] = true;
        $this->deploymentId = $deploymentId;
        return $this;
    }
    /**
     * The phase of the job invocation
     *
     * @return string
     */
    public function getPhase(): string
    {
        return $this->phase;
    }
    /**
     * The phase of the job invocation
     *
     * @param string $phase
     *
     * @return self
     */
    public function setPhase(string $phase): self
    {
        $this->initialized['phase'] = true;
        $this->phase = $phase;
        return $this;
    }
    /**
     * @return AppJobInvocationTrigger
     */
    public function getTrigger(): AppJobInvocationTrigger
    {
        return $this->trigger;
    }
    /**
     * @param AppJobInvocationTrigger $trigger
     *
     * @return self
     */
    public function setTrigger(AppJobInvocationTrigger $trigger): self
    {
        $this->initialized['trigger'] = true;
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
     * @param \DateTime $startedAt
     *
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCompletedAt(): \DateTime
    {
        return $this->completedAt;
    }
    /**
     * @param \DateTime $completedAt
     *
     * @return self
     */
    public function setCompletedAt(\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'jobName' => ['job_name', 'getJobName', 'setJobName'], 'deploymentId' => ['deployment_id', 'getDeploymentId', 'setDeploymentId'], 'phase' => ['phase', 'getPhase', 'setPhase'], 'trigger' => ['trigger', 'getTrigger', 'setTrigger'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'startedAt' => ['started_at', 'getStartedAt', 'setStartedAt'], 'completedAt' => ['completed_at', 'getCompletedAt', 'setCompletedAt']];
    }
}