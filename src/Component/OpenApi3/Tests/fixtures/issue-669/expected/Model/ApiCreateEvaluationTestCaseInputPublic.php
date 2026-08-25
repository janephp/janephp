<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateEvaluationTestCaseInputPublic implements AdditionalPropertiesInterface
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
    protected $agentWorkspaceName;
    /**
     * Dataset against which the test‑case is executed.
     *
     * @var string
     */
    protected $datasetUuid;
    /**
     * Description of the test case.
     *
     * @var string
     */
    protected $description;
    /**
     * Full metric list to use for evaluation test case.
     *
     * @var list<string>
     */
    protected $metrics;
    /**
     * Name of the test case.
     *
     * @var string
     */
    protected $name;
    /**
     * @var ApiStarMetric
     */
    protected $starMetric;
    /**
     * The workspace uuid.
     *
     * @var string
     */
    protected $workspaceUuid;
    /**
     * @return string
     */
    public function getAgentWorkspaceName(): string
    {
        return $this->agentWorkspaceName;
    }
    /**
     * @param string $agentWorkspaceName
     *
     * @return self
     */
    public function setAgentWorkspaceName(string $agentWorkspaceName): self
    {
        $this->initialized['agentWorkspaceName'] = true;
        $this->agentWorkspaceName = $agentWorkspaceName;
        return $this;
    }
    /**
     * Dataset against which the test‑case is executed.
     *
     * @return string
     */
    public function getDatasetUuid(): string
    {
        return $this->datasetUuid;
    }
    /**
     * Dataset against which the test‑case is executed.
     *
     * @param string $datasetUuid
     *
     * @return self
     */
    public function setDatasetUuid(string $datasetUuid): self
    {
        $this->initialized['datasetUuid'] = true;
        $this->datasetUuid = $datasetUuid;
        return $this;
    }
    /**
     * Description of the test case.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the test case.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Full metric list to use for evaluation test case.
     *
     * @return list<string>
     */
    public function getMetrics(): array
    {
        return $this->metrics;
    }
    /**
     * Full metric list to use for evaluation test case.
     *
     * @param list<string> $metrics
     *
     * @return self
     */
    public function setMetrics(array $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * Name of the test case.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the test case.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return ApiStarMetric
     */
    public function getStarMetric(): ApiStarMetric
    {
        return $this->starMetric;
    }
    /**
     * @param ApiStarMetric $starMetric
     *
     * @return self
     */
    public function setStarMetric(ApiStarMetric $starMetric): self
    {
        $this->initialized['starMetric'] = true;
        $this->starMetric = $starMetric;
        return $this;
    }
    /**
     * The workspace uuid.
     *
     * @return string
     */
    public function getWorkspaceUuid(): string
    {
        return $this->workspaceUuid;
    }
    /**
     * The workspace uuid.
     *
     * @param string $workspaceUuid
     *
     * @return self
     */
    public function setWorkspaceUuid(string $workspaceUuid): self
    {
        $this->initialized['workspaceUuid'] = true;
        $this->workspaceUuid = $workspaceUuid;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['agentWorkspaceName' => ['agent_workspace_name', 'getAgentWorkspaceName', 'setAgentWorkspaceName'], 'datasetUuid' => ['dataset_uuid', 'getDatasetUuid', 'setDatasetUuid'], 'description' => ['description', 'getDescription', 'setDescription'], 'metrics' => ['metrics', 'getMetrics', 'setMetrics'], 'name' => ['name', 'getName', 'setName'], 'starMetric' => ['star_metric', 'getStarMetric', 'setStarMetric'], 'workspaceUuid' => ['workspace_uuid', 'getWorkspaceUuid', 'setWorkspaceUuid']];
    }
}