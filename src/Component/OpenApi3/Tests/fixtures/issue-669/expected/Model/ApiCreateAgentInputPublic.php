<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiCreateAgentInputPublic extends \ArrayObject
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
     * Optional Anthropic API key ID to use with Anthropic models
     *
     * @var string
     */
    protected $anthropicKeyUuid;
    /**
     * A text description of the agent, not used in inference
     *
     * @var string
     */
    protected $description;
    /**
     * Agent instruction. Instructions help your agent to perform its job effectively. See [Write Effective Agent Instructions](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#agent-instructions) for best practices.
     *
     * @var string
     */
    protected $instruction;
    /**
     * Ids of the knowledge base(s) to attach to the agent
     *
     * @var list<string>
     */
    protected $knowledgeBaseUuid;
    /**
     * @var string
     */
    protected $modelProviderKeyUuid;
    /**
     * Identifier for the foundation model.
     *
     * @var string
     */
    protected $modelUuid;
    /**
     * Agent name
     *
     * @var string
     */
    protected $name;
    /**
     * Optional OpenAI API key ID to use with OpenAI models
     *
     * @var string
     */
    protected $openAiKeyUuid;
    /**
     * The id of the DigitalOcean project this agent will belong to
     *
     * @var string
     */
    protected $projectId;
    /**
     * The DigitalOcean region to deploy your agent in
     *
     * @var string
     */
    protected $region;
    /**
     * Agent tag to organize related resources
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * Identifier for the workspace
     *
     * @var string
     */
    protected $workspaceUuid;
    /**
     * Optional Anthropic API key ID to use with Anthropic models
     *
     * @return string
     */
    public function getAnthropicKeyUuid(): string
    {
        return $this->anthropicKeyUuid;
    }
    /**
     * Optional Anthropic API key ID to use with Anthropic models
     *
     * @param string $anthropicKeyUuid
     *
     * @return self
     */
    public function setAnthropicKeyUuid(string $anthropicKeyUuid): self
    {
        $this->initialized['anthropicKeyUuid'] = true;
        $this->anthropicKeyUuid = $anthropicKeyUuid;
        return $this;
    }
    /**
     * A text description of the agent, not used in inference
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * A text description of the agent, not used in inference
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
     * Agent instruction. Instructions help your agent to perform its job effectively. See [Write Effective Agent Instructions](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#agent-instructions) for best practices.
     *
     * @return string
     */
    public function getInstruction(): string
    {
        return $this->instruction;
    }
    /**
     * Agent instruction. Instructions help your agent to perform its job effectively. See [Write Effective Agent Instructions](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#agent-instructions) for best practices.
     *
     * @param string $instruction
     *
     * @return self
     */
    public function setInstruction(string $instruction): self
    {
        $this->initialized['instruction'] = true;
        $this->instruction = $instruction;
        return $this;
    }
    /**
     * Ids of the knowledge base(s) to attach to the agent
     *
     * @return list<string>
     */
    public function getKnowledgeBaseUuid(): array
    {
        return $this->knowledgeBaseUuid;
    }
    /**
     * Ids of the knowledge base(s) to attach to the agent
     *
     * @param list<string> $knowledgeBaseUuid
     *
     * @return self
     */
    public function setKnowledgeBaseUuid(array $knowledgeBaseUuid): self
    {
        $this->initialized['knowledgeBaseUuid'] = true;
        $this->knowledgeBaseUuid = $knowledgeBaseUuid;
        return $this;
    }
    /**
     * @return string
     */
    public function getModelProviderKeyUuid(): string
    {
        return $this->modelProviderKeyUuid;
    }
    /**
     * @param string $modelProviderKeyUuid
     *
     * @return self
     */
    public function setModelProviderKeyUuid(string $modelProviderKeyUuid): self
    {
        $this->initialized['modelProviderKeyUuid'] = true;
        $this->modelProviderKeyUuid = $modelProviderKeyUuid;
        return $this;
    }
    /**
     * Identifier for the foundation model.
     *
     * @return string
     */
    public function getModelUuid(): string
    {
        return $this->modelUuid;
    }
    /**
     * Identifier for the foundation model.
     *
     * @param string $modelUuid
     *
     * @return self
     */
    public function setModelUuid(string $modelUuid): self
    {
        $this->initialized['modelUuid'] = true;
        $this->modelUuid = $modelUuid;
        return $this;
    }
    /**
     * Agent name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Agent name
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
     * Optional OpenAI API key ID to use with OpenAI models
     *
     * @return string
     */
    public function getOpenAiKeyUuid(): string
    {
        return $this->openAiKeyUuid;
    }
    /**
     * Optional OpenAI API key ID to use with OpenAI models
     *
     * @param string $openAiKeyUuid
     *
     * @return self
     */
    public function setOpenAiKeyUuid(string $openAiKeyUuid): self
    {
        $this->initialized['openAiKeyUuid'] = true;
        $this->openAiKeyUuid = $openAiKeyUuid;
        return $this;
    }
    /**
     * The id of the DigitalOcean project this agent will belong to
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The id of the DigitalOcean project this agent will belong to
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The DigitalOcean region to deploy your agent in
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The DigitalOcean region to deploy your agent in
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * Agent tag to organize related resources
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * Agent tag to organize related resources
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * Identifier for the workspace
     *
     * @return string
     */
    public function getWorkspaceUuid(): string
    {
        return $this->workspaceUuid;
    }
    /**
     * Identifier for the workspace
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
}