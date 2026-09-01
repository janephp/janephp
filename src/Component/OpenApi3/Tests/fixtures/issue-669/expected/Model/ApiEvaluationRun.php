<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationRun implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Whether agent is deleted
     *
     * @var bool
     */
    public bool $agentDeleted;
    /**
     * The agent deployment name
     *
     * @var string
     */
    public string $agentDeploymentName;
    /**
     * Agent name
     *
     * @var string
     */
    public string $agentName;
    /**
     * Agent UUID.
     *
     * @var string
     */
    public string $agentUuid;
    /**
     * Version hash
     *
     * @var string
     */
    public string $agentVersionHash;
    /**
     * Agent workspace uuid
     *
     * @var string
     */
    public string $agentWorkspaceUuid;
    /**
     * @var string
     */
    public string $createdByUserEmail;
    /**
     * @var string
     */
    public string $createdByUserId;
    /**
     * The error description
     *
     * @var string
     */
    public string $errorDescription;
    /**
     * Evaluation run UUID.
     *
     * @var string
     */
    public string $evaluationRunUuid;
    /**
     * Evaluation test case workspace uuid
     *
     * @var string
     */
    public string $evaluationTestCaseWorkspaceUuid;
    /**
     * Run end time.
     *
     * @var \DateTime
     */
    public \DateTime $finishedAt;
    /**
     * The pass status of the evaluation run based on the star metric.
     *
     * @var bool
     */
    public bool $passStatus;
    /**
     * Run queued time.
     *
     * @var \DateTime
     */
    public \DateTime $queuedAt;
    /**
     * @var list<ApiEvaluationMetricResult>
     */
    public array $runLevelMetricResults;
    /**
     * Run name.
     *
     * @var string
     */
    public string $runName;
    /**
     * @var ApiEvaluationMetricResult
     */
    public ApiEvaluationMetricResult $starMetricResult;
    /**
     * Run start time.
     *
     * @var \DateTime
     */
    public \DateTime $startedAt;
    /**
     * Evaluation Run Statuses
     *
     * @var string
     */
    public string $status = 'EVALUATION_RUN_STATUS_UNSPECIFIED';
    /**
     * Test case description.
     *
     * @var string
     */
    public string $testCaseDescription;
    /**
     * Test case name.
     *
     * @var string
     */
    public string $testCaseName;
    /**
     * Test-case UUID.
     *
     * @var string
     */
    public string $testCaseUuid;
    /**
     * Test-case-version.
     *
     * @var int
     */
    public int $testCaseVersion;
    public function definedProperties(): array
    {
        return ['agentDeleted' => 'agent_deleted', 'agentDeploymentName' => 'agent_deployment_name', 'agentName' => 'agent_name', 'agentUuid' => 'agent_uuid', 'agentVersionHash' => 'agent_version_hash', 'agentWorkspaceUuid' => 'agent_workspace_uuid', 'createdByUserEmail' => 'created_by_user_email', 'createdByUserId' => 'created_by_user_id', 'errorDescription' => 'error_description', 'evaluationRunUuid' => 'evaluation_run_uuid', 'evaluationTestCaseWorkspaceUuid' => 'evaluation_test_case_workspace_uuid', 'finishedAt' => 'finished_at', 'passStatus' => 'pass_status', 'queuedAt' => 'queued_at', 'runLevelMetricResults' => 'run_level_metric_results', 'runName' => 'run_name', 'starMetricResult' => 'star_metric_result', 'startedAt' => 'started_at', 'status' => 'status', 'testCaseDescription' => 'test_case_description', 'testCaseName' => 'test_case_name', 'testCaseUuid' => 'test_case_uuid', 'testCaseVersion' => 'test_case_version'];
    }
}