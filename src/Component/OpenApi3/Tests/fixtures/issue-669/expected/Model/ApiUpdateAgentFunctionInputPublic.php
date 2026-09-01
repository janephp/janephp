<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateAgentFunctionInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agent id
     *
     * @var string
     */
    public string $agentUuid;
    /**
     * Funciton description
     *
     * @var string
     */
    public string $description;
    /**
     * The name of the function in the DigitalOcean functions platform
     *
     * @var string
     */
    public string $faasName;
    /**
     * The namespace of the function in the DigitalOcean functions platform
     *
     * @var string
     */
    public string $faasNamespace;
    /**
     * Function name
     *
     * @var string
     */
    public string $functionName;
    /**
     * Function id
     *
     * @var string
     */
    public string $functionUuid;
    /**
     * Describe the input schema for the function so the agent may call it
     *
     * @var array<string, mixed>
     */
    public iterable $inputSchema;
    /**
     * Describe the output schema for the function so the agent handle its response
     *
     * @var array<string, mixed>
     */
    public iterable $outputSchema;
    public function definedProperties(): array
    {
        return ['agentUuid' => 'agent_uuid', 'description' => 'description', 'faasName' => 'faas_name', 'faasNamespace' => 'faas_namespace', 'functionName' => 'function_name', 'functionUuid' => 'function_uuid', 'inputSchema' => 'input_schema', 'outputSchema' => 'output_schema'];
    }
}