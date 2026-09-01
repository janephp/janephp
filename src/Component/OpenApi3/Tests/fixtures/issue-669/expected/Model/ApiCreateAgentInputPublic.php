<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateAgentInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Optional Anthropic API key ID to use with Anthropic models
     *
     * @var string
     */
    public string $anthropicKeyUuid;
    /**
     * A text description of the agent, not used in inference
     *
     * @var string
     */
    public string $description;
    /**
     * Agent instruction. Instructions help your agent to perform its job effectively. See [Write Effective Agent Instructions](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#agent-instructions) for best practices.
     *
     * @var string
     */
    public string $instruction;
    /**
     * Ids of the knowledge base(s) to attach to the agent
     *
     * @var list<string>
     */
    public array $knowledgeBaseUuid;
    /**
     * @var string
     */
    public string $modelProviderKeyUuid;
    /**
     * Identifier for the foundation model.
     *
     * @var string
     */
    public string $modelUuid;
    /**
     * Agent name
     *
     * @var string
     */
    public string $name;
    /**
     * Optional OpenAI API key ID to use with OpenAI models
     *
     * @var string
     */
    public string $openAiKeyUuid;
    /**
     * The id of the DigitalOcean project this agent will belong to
     *
     * @var string
     */
    public string $projectId;
    /**
     * The DigitalOcean region to deploy your agent in
     *
     * @var string
     */
    public string $region;
    /**
     * Agent tag to organize related resources
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * Identifier for the workspace
     *
     * @var string
     */
    public string $workspaceUuid;
    public function definedProperties(): array
    {
        return ['anthropicKeyUuid' => 'anthropic_key_uuid', 'description' => 'description', 'instruction' => 'instruction', 'knowledgeBaseUuid' => 'knowledge_base_uuid', 'modelProviderKeyUuid' => 'model_provider_key_uuid', 'modelUuid' => 'model_uuid', 'name' => 'name', 'openAiKeyUuid' => 'open_ai_key_uuid', 'projectId' => 'project_id', 'region' => 'region', 'tags' => 'tags', 'workspaceUuid' => 'workspace_uuid'];
    }
}