<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateAgentInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $agentLogInsightsEnabled;
    /**
     * Optional list of allowed domains for the chatbot - Must use fully qualified domain name (FQDN) such as https://example.com
     *
     * @var list<string>
     */
    public array $allowedDomains;
    /**
     * Optional anthropic key uuid for use with anthropic models
     *
     * @var string
     */
    public string $anthropicKeyUuid;
    /**
     * Optional update of conversation logs enabled
     *
     * @var bool
     */
    public bool $conversationLogsEnabled;
    /**
     * Agent description
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
     * How many results should be considered from an attached knowledge base
     *
     * @var int
     */
    public int $k;
    /**
     * Specifies the maximum number of tokens the model can process in a single input or output, set as a number between 1 and 512. This determines the length of each response.
     *
     * @var int
     */
    public int $maxTokens;
    /**
     * Optional Model Provider uuid for use with provider models
     *
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
     * Optional OpenAI key uuid for use with OpenAI models
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
     * @var bool
     */
    public bool $provideCitations;
    /**
     * - RETRIEVAL_METHOD_UNKNOWN: The retrieval method is unknown
     *  - RETRIEVAL_METHOD_REWRITE: The retrieval method is rewrite
     *  - RETRIEVAL_METHOD_STEP_BACK: The retrieval method is step back
     *  - RETRIEVAL_METHOD_SUB_QUERIES: The retrieval method is sub queries
     *  - RETRIEVAL_METHOD_NONE: The retrieval method is none
     *
     * @var string
     */
    public string $retrievalMethod = 'RETRIEVAL_METHOD_UNKNOWN';
    /**
     * A set of abitrary tags to organize your agent
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * Controls the model’s creativity, specified as a number between 0 and 1. Lower values produce more predictable and conservative responses, while higher values encourage creativity and variation.
     *
     * @var float
     */
    public float $temperature;
    /**
     * Defines the cumulative probability threshold for word selection, specified as a number between 0 and 1. Higher values allow for more diverse outputs, while lower values ensure focused and coherent responses.
     *
     * @var float
     */
    public float $topP;
    /**
     * Unique agent id
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['agentLogInsightsEnabled' => 'agent_log_insights_enabled', 'allowedDomains' => 'allowed_domains', 'anthropicKeyUuid' => 'anthropic_key_uuid', 'conversationLogsEnabled' => 'conversation_logs_enabled', 'description' => 'description', 'instruction' => 'instruction', 'k' => 'k', 'maxTokens' => 'max_tokens', 'modelProviderKeyUuid' => 'model_provider_key_uuid', 'modelUuid' => 'model_uuid', 'name' => 'name', 'openAiKeyUuid' => 'open_ai_key_uuid', 'projectId' => 'project_id', 'provideCitations' => 'provide_citations', 'retrievalMethod' => 'retrieval_method', 'tags' => 'tags', 'temperature' => 'temperature', 'topP' => 'top_p', 'uuid' => 'uuid'];
    }
}