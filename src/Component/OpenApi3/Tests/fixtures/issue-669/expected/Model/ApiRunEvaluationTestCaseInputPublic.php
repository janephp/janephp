<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiRunEvaluationTestCaseInputPublic implements AdditionalPropertiesInterface
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
     * Agent deployment names to run the test case against (ADK agent workspaces).
     *
     * @var list<string>
     */
    protected $agentDeploymentNames;
    /**
     * Agent UUIDs to run the test case against (legacy agents).
     *
     * @var list<string>
     */
    protected $agentUuids;
    /**
     * The name of the run.
     *
     * @var string
     */
    protected $runName;
    /**
     * Test-case UUID to run
     *
     * @var string
     */
    protected $testCaseUuid;
    /**
     * Agent deployment names to run the test case against (ADK agent workspaces).
     *
     * @return list<string>
     */
    public function getAgentDeploymentNames(): array
    {
        return $this->agentDeploymentNames;
    }
    /**
     * Agent deployment names to run the test case against (ADK agent workspaces).
     *
     * @param list<string> $agentDeploymentNames
     *
     * @return self
     */
    public function setAgentDeploymentNames(array $agentDeploymentNames): self
    {
        $this->initialized['agentDeploymentNames'] = true;
        $this->agentDeploymentNames = $agentDeploymentNames;
        return $this;
    }
    /**
     * Agent UUIDs to run the test case against (legacy agents).
     *
     * @return list<string>
     */
    public function getAgentUuids(): array
    {
        return $this->agentUuids;
    }
    /**
     * Agent UUIDs to run the test case against (legacy agents).
     *
     * @param list<string> $agentUuids
     *
     * @return self
     */
    public function setAgentUuids(array $agentUuids): self
    {
        $this->initialized['agentUuids'] = true;
        $this->agentUuids = $agentUuids;
        return $this;
    }
    /**
     * The name of the run.
     *
     * @return string
     */
    public function getRunName(): string
    {
        return $this->runName;
    }
    /**
     * The name of the run.
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
     * Test-case UUID to run
     *
     * @return string
     */
    public function getTestCaseUuid(): string
    {
        return $this->testCaseUuid;
    }
    /**
     * Test-case UUID to run
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
    public function definedProperties(): array
    {
        return ['agentDeploymentNames' => ['agent_deployment_names', 'getAgentDeploymentNames', 'setAgentDeploymentNames'], 'agentUuids' => ['agent_uuids', 'getAgentUuids', 'setAgentUuids'], 'runName' => ['run_name', 'getRunName', 'setRunName'], 'testCaseUuid' => ['test_case_uuid', 'getTestCaseUuid', 'setTestCaseUuid']];
    }
}