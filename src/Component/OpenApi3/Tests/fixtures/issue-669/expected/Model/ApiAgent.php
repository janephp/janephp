<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Anthropic API Key Info
     *
     * @var ApiAnthropicAPIKeyInfo
     */
    public ApiAnthropicAPIKeyInfo $anthropicApiKey;
    /**
     * Api key infos
     *
     * @var list<ApiAgentAPIKeyInfo>
     */
    public array $apiKeyInfos;
    /**
     * Api keys
     *
     * @var list<ApiAgentAPIKey>
     */
    public array $apiKeys;
    /**
     * A Chatbot
     *
     * @var ApiChatbot
     */
    public ApiChatbot $chatbot;
    /**
     * Chatbot identifiers
     *
     * @var list<ApiAgentChatbotIdentifier>
     */
    public array $chatbotIdentifiers;
    /**
     * Child agents
     *
     * @var list<ApiAgent>
     */
    public array $childAgents;
    /**
     * Whether conversation logs are enabled for the agent
     *
     * @var bool
     */
    public bool $conversationLogsEnabled;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Description of deployment
     *
     * @var ApiDeployment
     */
    public ApiDeployment $deployment;
    /**
     * Description of agent
     *
     * @var string
     */
    public string $description;
    /**
     * @var list<ApiAgentFunction>
     */
    public array $functions;
    /**
     * The guardrails the agent is attached to
     *
     * @var list<ApiAgentGuardrail>
     */
    public array $guardrails;
    /**
     * @var string
     */
    public string $ifCase;
    /**
     * Agent instruction. Instructions help your agent to perform its job effectively. See [Write Effective Agent Instructions](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#agent-instructions) for best practices.
     *
     * @var string
     */
    public string $instruction;
    /**
     * @var int
     */
    public int $k;
    /**
     * Knowledge bases
     *
     * @var list<ApiKnowledgeBase>
     */
    public array $knowledgeBases;
    /**
     * @var ApiAgentLoggingConfig
     */
    public ApiAgentLoggingConfig $loggingConfig;
    /**
     * @var int
     */
    public int $maxTokens;
    /**
     * Description of a Model
     *
     * @var ApiModel
     */
    public ApiModel $model;
    /**
     * @var ApiModelProviderKeyInfo
     */
    public ApiModelProviderKeyInfo $modelProviderKey;
    /**
     * Agent name
     *
     * @var string
     */
    public string $name;
    /**
     * OpenAI API Key Info
     *
     * @var ApiOpenAIAPIKeyInfo
     */
    public ApiOpenAIAPIKeyInfo $openaiApiKey;
    /**
     * Parent agents
     *
     * @var list<ApiAgent>
     */
    public array $parentAgents;
    /**
     * @var string
     */
    public string $projectId;
    /**
     * Whether the agent should provide in-response citations
     *
     * @var bool
     */
    public bool $provideCitations;
    /**
     * Region code
     *
     * @var string
     */
    public string $region;
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
     * Creation of route date / time
     *
     * @var \DateTime
     */
    public \DateTime $routeCreatedAt;
    /**
     * @var string
     */
    public string $routeCreatedBy;
    /**
     * Route name
     *
     * @var string
     */
    public string $routeName;
    /**
     * @var string
     */
    public string $routeUuid;
    /**
     * Agent tag to organize related resources
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * @var float
     */
    public float $temperature;
    /**
     * Represents an AgentTemplate entity
     *
     * @var ApiAgentTemplate
     */
    public ApiAgentTemplate $template;
    /**
     * @var float
     */
    public float $topP;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Access your agent under this url
     *
     * @var string
     */
    public string $url;
    /**
     * Id of user that created the agent
     *
     * @var string
     */
    public string $userId;
    /**
     * Unique agent id
     *
     * @var string
     */
    public string $uuid;
    /**
     * The latest version of the agent
     *
     * @var string
     */
    public string $versionHash;
    /**
     * VPC Egress IPs
     *
     * @var list<string>
     */
    public array $vpcEgressIps;
    /**
     * @var string
     */
    public string $vpcUuid;
    /**
     * @var ApiWorkspace
     */
    public ApiWorkspace $workspace;
    public function definedProperties(): array
    {
        return ['anthropicApiKey' => 'anthropic_api_key', 'apiKeyInfos' => 'api_key_infos', 'apiKeys' => 'api_keys', 'chatbot' => 'chatbot', 'chatbotIdentifiers' => 'chatbot_identifiers', 'childAgents' => 'child_agents', 'conversationLogsEnabled' => 'conversation_logs_enabled', 'createdAt' => 'created_at', 'deployment' => 'deployment', 'description' => 'description', 'functions' => 'functions', 'guardrails' => 'guardrails', 'ifCase' => 'if_case', 'instruction' => 'instruction', 'k' => 'k', 'knowledgeBases' => 'knowledge_bases', 'loggingConfig' => 'logging_config', 'maxTokens' => 'max_tokens', 'model' => 'model', 'modelProviderKey' => 'model_provider_key', 'name' => 'name', 'openaiApiKey' => 'openai_api_key', 'parentAgents' => 'parent_agents', 'projectId' => 'project_id', 'provideCitations' => 'provide_citations', 'region' => 'region', 'retrievalMethod' => 'retrieval_method', 'routeCreatedAt' => 'route_created_at', 'routeCreatedBy' => 'route_created_by', 'routeName' => 'route_name', 'routeUuid' => 'route_uuid', 'tags' => 'tags', 'temperature' => 'temperature', 'template' => 'template', 'topP' => 'top_p', 'updatedAt' => 'updated_at', 'url' => 'url', 'userId' => 'user_id', 'uuid' => 'uuid', 'versionHash' => 'version_hash', 'vpcEgressIps' => 'vpc_egress_ips', 'vpcUuid' => 'vpc_uuid', 'workspace' => 'workspace'];
    }
}