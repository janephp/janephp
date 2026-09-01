<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiRunEvaluationTestCaseInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agent deployment names to run the test case against (ADK agent workspaces).
     *
     * @var list<string>
     */
    public array $agentDeploymentNames;
    /**
     * Agent UUIDs to run the test case against (legacy agents).
     *
     * @var list<string>
     */
    public array $agentUuids;
    /**
     * The name of the run.
     *
     * @var string
     */
    public string $runName;
    /**
     * Test-case UUID to run
     *
     * @var string
     */
    public string $testCaseUuid;
    public function definedProperties(): array
    {
        return ['agentDeploymentNames' => 'agent_deployment_names', 'agentUuids' => 'agent_uuids', 'runName' => 'run_name', 'testCaseUuid' => 'test_case_uuid'];
    }
}