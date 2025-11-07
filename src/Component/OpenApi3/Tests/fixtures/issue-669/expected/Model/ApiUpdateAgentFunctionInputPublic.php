<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateAgentFunctionInputPublic extends \ArrayObject
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
     * Agent id
     *
     * @var string
     */
    protected $agentUuid;
    /**
     * Funciton description
     *
     * @var string
     */
    protected $description;
    /**
     * The name of the function in the DigitalOcean functions platform
     *
     * @var string
     */
    protected $faasName;
    /**
     * The namespace of the function in the DigitalOcean functions platform
     *
     * @var string
     */
    protected $faasNamespace;
    /**
     * Function name
     *
     * @var string
     */
    protected $functionName;
    /**
     * Function id
     *
     * @var string
     */
    protected $functionUuid;
    /**
     * Describe the input schema for the function so the agent may call it
     *
     * @var array<string, mixed>
     */
    protected $inputSchema;
    /**
     * Describe the output schema for the function so the agent handle its response
     *
     * @var array<string, mixed>
     */
    protected $outputSchema;
    /**
     * Agent id
     *
     * @return string
     */
    public function getAgentUuid(): string
    {
        return $this->agentUuid;
    }
    /**
     * Agent id
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
     * Funciton description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Funciton description
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
     * The name of the function in the DigitalOcean functions platform
     *
     * @return string
     */
    public function getFaasName(): string
    {
        return $this->faasName;
    }
    /**
     * The name of the function in the DigitalOcean functions platform
     *
     * @param string $faasName
     *
     * @return self
     */
    public function setFaasName(string $faasName): self
    {
        $this->initialized['faasName'] = true;
        $this->faasName = $faasName;
        return $this;
    }
    /**
     * The namespace of the function in the DigitalOcean functions platform
     *
     * @return string
     */
    public function getFaasNamespace(): string
    {
        return $this->faasNamespace;
    }
    /**
     * The namespace of the function in the DigitalOcean functions platform
     *
     * @param string $faasNamespace
     *
     * @return self
     */
    public function setFaasNamespace(string $faasNamespace): self
    {
        $this->initialized['faasNamespace'] = true;
        $this->faasNamespace = $faasNamespace;
        return $this;
    }
    /**
     * Function name
     *
     * @return string
     */
    public function getFunctionName(): string
    {
        return $this->functionName;
    }
    /**
     * Function name
     *
     * @param string $functionName
     *
     * @return self
     */
    public function setFunctionName(string $functionName): self
    {
        $this->initialized['functionName'] = true;
        $this->functionName = $functionName;
        return $this;
    }
    /**
     * Function id
     *
     * @return string
     */
    public function getFunctionUuid(): string
    {
        return $this->functionUuid;
    }
    /**
     * Function id
     *
     * @param string $functionUuid
     *
     * @return self
     */
    public function setFunctionUuid(string $functionUuid): self
    {
        $this->initialized['functionUuid'] = true;
        $this->functionUuid = $functionUuid;
        return $this;
    }
    /**
     * Describe the input schema for the function so the agent may call it
     *
     * @return array<string, mixed>
     */
    public function getInputSchema(): iterable
    {
        return $this->inputSchema;
    }
    /**
     * Describe the input schema for the function so the agent may call it
     *
     * @param array<string, mixed> $inputSchema
     *
     * @return self
     */
    public function setInputSchema(iterable $inputSchema): self
    {
        $this->initialized['inputSchema'] = true;
        $this->inputSchema = $inputSchema;
        return $this;
    }
    /**
     * Describe the output schema for the function so the agent handle its response
     *
     * @return array<string, mixed>
     */
    public function getOutputSchema(): iterable
    {
        return $this->outputSchema;
    }
    /**
     * Describe the output schema for the function so the agent handle its response
     *
     * @param array<string, mixed> $outputSchema
     *
     * @return self
     */
    public function setOutputSchema(iterable $outputSchema): self
    {
        $this->initialized['outputSchema'] = true;
        $this->outputSchema = $outputSchema;
        return $this;
    }
}