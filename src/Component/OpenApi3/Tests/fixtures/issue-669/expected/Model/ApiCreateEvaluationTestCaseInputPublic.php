<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateEvaluationTestCaseInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $agentWorkspaceName;
    /**
     * Dataset against which the test‑case is executed.
     *
     * @var string
     */
    public string $datasetUuid;
    /**
     * Description of the test case.
     *
     * @var string
     */
    public string $description;
    /**
     * Full metric list to use for evaluation test case.
     *
     * @var list<string>
     */
    public array $metrics;
    /**
     * Name of the test case.
     *
     * @var string
     */
    public string $name;
    /**
     * @var ApiStarMetric
     */
    public ApiStarMetric $starMetric;
    /**
     * The workspace uuid.
     *
     * @var string
     */
    public string $workspaceUuid;
    public function definedProperties(): array
    {
        return ['agentWorkspaceName' => 'agent_workspace_name', 'datasetUuid' => 'dataset_uuid', 'description' => 'description', 'metrics' => 'metrics', 'name' => 'name', 'starMetric' => 'star_metric', 'workspaceUuid' => 'workspace_uuid'];
    }
}