<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiEvaluationRun extends \ArrayObject
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
     * Whether agent is deleted
     *
     * @var bool
     */
    protected $agentDeleted;
    /**
     * The agent deployment name
     *
     * @var string
     */
    protected $agentDeploymentName;
    /**
     * Agent name
     *
     * @var string
     */
    protected $agentName;
    /**
     * Agent UUID.
     *
     * @var string
     */
    protected $agentUuid;
    /**
     * Version hash
     *
     * @var string
     */
    protected $agentVersionHash;
    /**
     * Agent workspace uuid
     *
     * @var string
     */
    protected $agentWorkspaceUuid;
    /**
     * @var string
     */
    protected $createdByUserEmail;
    /**
     * @var string
     */
    protected $createdByUserId;
    /**
     * The error description
     *
     * @var string
     */
    protected $errorDescription;
    /**
     * Evaluation run UUID.
     *
     * @var string
     */
    protected $evaluationRunUuid;
    /**
     * Evaluation test case workspace uuid
     *
     * @var string
     */
    protected $evaluationTestCaseWorkspaceUuid;
    /**
     * Run end time.
     *
     * @var \DateTime
     */
    protected $finishedAt;
    /**
     * The pass status of the evaluation run based on the star metric.
     *
     * @var bool
     */
    protected $passStatus;
    /**
     * Run queued time.
     *
     * @var \DateTime
     */
    protected $queuedAt;
    /**
     * @var list<ApiEvaluationMetricResult>
     */
    protected $runLevelMetricResults;
    /**
     * Run name.
     *
     * @var string
     */
    protected $runName;
    /**
     * @var ApiEvaluationMetricResult
     */
    protected $starMetricResult;
    /**
     * Run start time.
     *
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * Evaluation Run Statuses
     *
     * @var string
     */
    protected $status = 'EVALUATION_RUN_STATUS_UNSPECIFIED';
    /**
     * Test case description.
     *
     * @var string
     */
    protected $testCaseDescription;
    /**
     * Test case name.
     *
     * @var string
     */
    protected $testCaseName;
    /**
     * Test-case UUID.
     *
     * @var string
     */
    protected $testCaseUuid;
    /**
     * Test-case-version.
     *
     * @var int
     */
    protected $testCaseVersion;
    /**
     * Whether agent is deleted
     *
     * @return bool
     */
    public function getAgentDeleted(): bool
    {
        return $this->agentDeleted;
    }
    /**
     * Whether agent is deleted
     *
     * @param bool $agentDeleted
     *
     * @return self
     */
    public function setAgentDeleted(bool $agentDeleted): self
    {
        $this->initialized['agentDeleted'] = true;
        $this->agentDeleted = $agentDeleted;
        return $this;
    }
    /**
     * The agent deployment name
     *
     * @return string
     */
    public function getAgentDeploymentName(): string
    {
        return $this->agentDeploymentName;
    }
    /**
     * The agent deployment name
     *
     * @param string $agentDeploymentName
     *
     * @return self
     */
    public function setAgentDeploymentName(string $agentDeploymentName): self
    {
        $this->initialized['agentDeploymentName'] = true;
        $this->agentDeploymentName = $agentDeploymentName;
        return $this;
    }
    /**
     * Agent name
     *
     * @return string
     */
    public function getAgentName(): string
    {
        return $this->agentName;
    }
    /**
     * Agent name
     *
     * @param string $agentName
     *
     * @return self
     */
    public function setAgentName(string $agentName): self
    {
        $this->initialized['agentName'] = true;
        $this->agentName = $agentName;
        return $this;
    }
    /**
     * Agent UUID.
     *
     * @return string
     */
    public function getAgentUuid(): string
    {
        return $this->agentUuid;
    }
    /**
     * Agent UUID.
     *
     * @param string $agentUuid
     *
     * @return self
     */
    public function setAgentUuid(string $agentUuid): self
    {
        $this->initialized['agentUuid'] = true;
        $this->agentUuid = $agentUuid;
        return $this;
    }
    /**
     * Version hash
     *
     * @return string
     */
    public function getAgentVersionHash(): string
    {
        return $this->agentVersionHash;
    }
    /**
     * Version hash
     *
     * @param string $agentVersionHash
     *
     * @return self
     */
    public function setAgentVersionHash(string $agentVersionHash): self
    {
        $this->initialized['agentVersionHash'] = true;
        $this->agentVersionHash = $agentVersionHash;
        return $this;
    }
    /**
     * Agent workspace uuid
     *
     * @return string
     */
    public function getAgentWorkspaceUuid(): string
    {
        return $this->agentWorkspaceUuid;
    }
    /**
     * Agent workspace uuid
     *
     * @param string $agentWorkspaceUuid
     *
     * @return self
     */
    public function setAgentWorkspaceUuid(string $agentWorkspaceUuid): self
    {
        $this->initialized['agentWorkspaceUuid'] = true;
        $this->agentWorkspaceUuid = $agentWorkspaceUuid;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedByUserEmail(): string
    {
        return $this->createdByUserEmail;
    }
    /**
     * @param string $createdByUserEmail
     *
     * @return self
     */
    public function setCreatedByUserEmail(string $createdByUserEmail): self
    {
        $this->initialized['createdByUserEmail'] = true;
        $this->createdByUserEmail = $createdByUserEmail;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedByUserId(): string
    {
        return $this->createdByUserId;
    }
    /**
     * @param string $createdByUserId
     *
     * @return self
     */
    public function setCreatedByUserId(string $createdByUserId): self
    {
        $this->initialized['createdByUserId'] = true;
        $this->createdByUserId = $createdByUserId;
        return $this;
    }
    /**
     * The error description
     *
     * @return string
     */
    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }
    /**
     * The error description
     *
     * @param string $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(string $errorDescription): self
    {
        $this->initialized['errorDescription'] = true;
        $this->errorDescription = $errorDescription;
        return $this;
    }
    /**
     * Evaluation run UUID.
     *
     * @return string
     */
    public function getEvaluationRunUuid(): string
    {
        return $this->evaluationRunUuid;
    }
    /**
     * Evaluation run UUID.
     *
     * @param string $evaluationRunUuid
     *
     * @return self
     */
    public function setEvaluationRunUuid(string $evaluationRunUuid): self
    {
        $this->initialized['evaluationRunUuid'] = true;
        $this->evaluationRunUuid = $evaluationRunUuid;
        return $this;
    }
    /**
     * Evaluation test case workspace uuid
     *
     * @return string
     */
    public function getEvaluationTestCaseWorkspaceUuid(): string
    {
        return $this->evaluationTestCaseWorkspaceUuid;
    }
    /**
     * Evaluation test case workspace uuid
     *
     * @param string $evaluationTestCaseWorkspaceUuid
     *
     * @return self
     */
    public function setEvaluationTestCaseWorkspaceUuid(string $evaluationTestCaseWorkspaceUuid): self
    {
        $this->initialized['evaluationTestCaseWorkspaceUuid'] = true;
        $this->evaluationTestCaseWorkspaceUuid = $evaluationTestCaseWorkspaceUuid;
        return $this;
    }
    /**
     * Run end time.
     *
     * @return \DateTime
     */
    public function getFinishedAt(): \DateTime
    {
        return $this->finishedAt;
    }
    /**
     * Run end time.
     *
     * @param \DateTime $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(\DateTime $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * The pass status of the evaluation run based on the star metric.
     *
     * @return bool
     */
    public function getPassStatus(): bool
    {
        return $this->passStatus;
    }
    /**
     * The pass status of the evaluation run based on the star metric.
     *
     * @param bool $passStatus
     *
     * @return self
     */
    public function setPassStatus(bool $passStatus): self
    {
        $this->initialized['passStatus'] = true;
        $this->passStatus = $passStatus;
        return $this;
    }
    /**
     * Run queued time.
     *
     * @return \DateTime
     */
    public function getQueuedAt(): \DateTime
    {
        return $this->queuedAt;
    }
    /**
     * Run queued time.
     *
     * @param \DateTime $queuedAt
     *
     * @return self
     */
    public function setQueuedAt(\DateTime $queuedAt): self
    {
        $this->initialized['queuedAt'] = true;
        $this->queuedAt = $queuedAt;
        return $this;
    }
    /**
     * @return list<ApiEvaluationMetricResult>
     */
    public function getRunLevelMetricResults(): array
    {
        return $this->runLevelMetricResults;
    }
    /**
     * @param list<ApiEvaluationMetricResult> $runLevelMetricResults
     *
     * @return self
     */
    public function setRunLevelMetricResults(array $runLevelMetricResults): self
    {
        $this->initialized['runLevelMetricResults'] = true;
        $this->runLevelMetricResults = $runLevelMetricResults;
        return $this;
    }
    /**
     * Run name.
     *
     * @return string
     */
    public function getRunName(): string
    {
        return $this->runName;
    }
    /**
     * Run name.
     *
     * @param string $runName
     *
     * @return self
     */
    public function setRunName(string $runName): self
    {
        $this->initialized['runName'] = true;
        $this->runName = $runName;
        return $this;
    }
    /**
     * @return ApiEvaluationMetricResult
     */
    public function getStarMetricResult(): ApiEvaluationMetricResult
    {
        return $this->starMetricResult;
    }
    /**
     * @param ApiEvaluationMetricResult $starMetricResult
     *
     * @return self
     */
    public function setStarMetricResult(ApiEvaluationMetricResult $starMetricResult): self
    {
        $this->initialized['starMetricResult'] = true;
        $this->starMetricResult = $starMetricResult;
        return $this;
    }
    /**
     * Run start time.
     *
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
     * Run start time.
     *
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
     * Evaluation Run Statuses
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Evaluation Run Statuses
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Test case description.
     *
     * @return string
     */
    public function getTestCaseDescription(): string
    {
        return $this->testCaseDescription;
    }
    /**
     * Test case description.
     *
     * @param string $testCaseDescription
     *
     * @return self
     */
    public function setTestCaseDescription(string $testCaseDescription): self
    {
        $this->initialized['testCaseDescription'] = true;
        $this->testCaseDescription = $testCaseDescription;
        return $this;
    }
    /**
     * Test case name.
     *
     * @return string
     */
    public function getTestCaseName(): string
    {
        return $this->testCaseName;
    }
    /**
     * Test case name.
     *
     * @param string $testCaseName
     *
     * @return self
     */
    public function setTestCaseName(string $testCaseName): self
    {
        $this->initialized['testCaseName'] = true;
        $this->testCaseName = $testCaseName;
        return $this;
    }
    /**
     * Test-case UUID.
     *
     * @return string
     */
    public function getTestCaseUuid(): string
    {
        return $this->testCaseUuid;
    }
    /**
     * Test-case UUID.
     *
     * @param string $testCaseUuid
     *
     * @return self
     */
    public function setTestCaseUuid(string $testCaseUuid): self
    {
        $this->initialized['testCaseUuid'] = true;
        $this->testCaseUuid = $testCaseUuid;
        return $this;
    }
    /**
     * Test-case-version.
     *
     * @return int
     */
    public function getTestCaseVersion(): int
    {
        return $this->testCaseVersion;
    }
    /**
     * Test-case-version.
     *
     * @param int $testCaseVersion
     *
     * @return self
     */
    public function setTestCaseVersion(int $testCaseVersion): self
    {
        $this->initialized['testCaseVersion'] = true;
        $this->testCaseVersion = $testCaseVersion;
        return $this;
    }
}