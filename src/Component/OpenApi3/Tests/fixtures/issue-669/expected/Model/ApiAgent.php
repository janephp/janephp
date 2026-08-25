<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgent implements AdditionalPropertiesInterface
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
     * Anthropic API Key Info
     *
     * @var ApiAnthropicAPIKeyInfo
     */
    protected $anthropicApiKey;
    /**
     * Api key infos
     *
     * @var list<ApiAgentAPIKeyInfo>
     */
    protected $apiKeyInfos;
    /**
     * Api keys
     *
     * @var list<ApiAgentAPIKey>
     */
    protected $apiKeys;
    /**
     * A Chatbot
     *
     * @var ApiChatbot
     */
    protected $chatbot;
    /**
     * Chatbot identifiers
     *
     * @var list<ApiAgentChatbotIdentifier>
     */
    protected $chatbotIdentifiers;
    /**
     * Child agents
     *
     * @var list<ApiAgent>
     */
    protected $childAgents;
    /**
     * Whether conversation logs are enabled for the agent
     *
     * @var bool
     */
    protected $conversationLogsEnabled;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Description of deployment
     *
     * @var ApiDeployment
     */
    protected $deployment;
    /**
     * Description of agent
     *
     * @var string
     */
    protected $description;
    /**
     * @var list<ApiAgentFunction>
     */
    protected $functions;
    /**
     * The guardrails the agent is attached to
     *
     * @var list<ApiAgentGuardrail>
     */
    protected $guardrails;
    /**
     * @var string
     */
    protected $ifCase;
    /**
     * Agent instruction. Instructions help your agent to perform its job effectively. See [Write Effective Agent Instructions](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#agent-instructions) for best practices.
     *
     * @var string
     */
    protected $instruction;
    /**
     * @var int
     */
    protected $k;
    /**
     * Knowledge bases
     *
     * @var list<ApiKnowledgeBase>
     */
    protected $knowledgeBases;
    /**
     * @var ApiAgentLoggingConfig
     */
    protected $loggingConfig;
    /**
     * @var int
     */
    protected $maxTokens;
    /**
     * Description of a Model
     *
     * @var ApiModel
     */
    protected $model;
    /**
     * @var ApiModelProviderKeyInfo
     */
    protected $modelProviderKey;
    /**
     * Agent name
     *
     * @var string
     */
    protected $name;
    /**
     * OpenAI API Key Info
     *
     * @var ApiOpenAIAPIKeyInfo
     */
    protected $openaiApiKey;
    /**
     * Parent agents
     *
     * @var list<ApiAgent>
     */
    protected $parentAgents;
    /**
     * @var string
     */
    protected $projectId;
    /**
     * Whether the agent should provide in-response citations
     *
     * @var bool
     */
    protected $provideCitations;
    /**
     * Region code
     *
     * @var string
     */
    protected $region;
    /**
     * - RETRIEVAL_METHOD_UNKNOWN: The retrieval method is unknown
     *  - RETRIEVAL_METHOD_REWRITE: The retrieval method is rewrite
     *  - RETRIEVAL_METHOD_STEP_BACK: The retrieval method is step back
     *  - RETRIEVAL_METHOD_SUB_QUERIES: The retrieval method is sub queries
     *  - RETRIEVAL_METHOD_NONE: The retrieval method is none
     *
     * @var string
     */
    protected $retrievalMethod = 'RETRIEVAL_METHOD_UNKNOWN';
    /**
     * Creation of route date / time
     *
     * @var \DateTime
     */
    protected $routeCreatedAt;
    /**
     * @var string
     */
    protected $routeCreatedBy;
    /**
     * Route name
     *
     * @var string
     */
    protected $routeName;
    /**
     * @var string
     */
    protected $routeUuid;
    /**
     * Agent tag to organize related resources
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * @var float
     */
    protected $temperature;
    /**
     * Represents an AgentTemplate entity
     *
     * @var ApiAgentTemplate
     */
    protected $template;
    /**
     * @var float
     */
    protected $topP;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Access your agent under this url
     *
     * @var string
     */
    protected $url;
    /**
     * Id of user that created the agent
     *
     * @var string
     */
    protected $userId;
    /**
     * Unique agent id
     *
     * @var string
     */
    protected $uuid;
    /**
     * The latest version of the agent
     *
     * @var string
     */
    protected $versionHash;
    /**
     * VPC Egress IPs
     *
     * @var list<string>
     */
    protected $vpcEgressIps;
    /**
     * @var string
     */
    protected $vpcUuid;
    /**
     * @var ApiWorkspace
     */
    protected $workspace;
    /**
     * Anthropic API Key Info
     *
     * @return ApiAnthropicAPIKeyInfo
     */
    public function getAnthropicApiKey(): ApiAnthropicAPIKeyInfo
    {
        return $this->anthropicApiKey;
    }
    /**
     * Anthropic API Key Info
     *
     * @param ApiAnthropicAPIKeyInfo $anthropicApiKey
     *
     * @return self
     */
    public function setAnthropicApiKey(ApiAnthropicAPIKeyInfo $anthropicApiKey): self
    {
        $this->initialized['anthropicApiKey'] = true;
        $this->anthropicApiKey = $anthropicApiKey;
        return $this;
    }
    /**
     * Api key infos
     *
     * @return list<ApiAgentAPIKeyInfo>
     */
    public function getApiKeyInfos(): array
    {
        return $this->apiKeyInfos;
    }
    /**
     * Api key infos
     *
     * @param list<ApiAgentAPIKeyInfo> $apiKeyInfos
     *
     * @return self
     */
    public function setApiKeyInfos(array $apiKeyInfos): self
    {
        $this->initialized['apiKeyInfos'] = true;
        $this->apiKeyInfos = $apiKeyInfos;
        return $this;
    }
    /**
     * Api keys
     *
     * @return list<ApiAgentAPIKey>
     */
    public function getApiKeys(): array
    {
        return $this->apiKeys;
    }
    /**
     * Api keys
     *
     * @param list<ApiAgentAPIKey> $apiKeys
     *
     * @return self
     */
    public function setApiKeys(array $apiKeys): self
    {
        $this->initialized['apiKeys'] = true;
        $this->apiKeys = $apiKeys;
        return $this;
    }
    /**
     * A Chatbot
     *
     * @return ApiChatbot
     */
    public function getChatbot(): ApiChatbot
    {
        return $this->chatbot;
    }
    /**
     * A Chatbot
     *
     * @param ApiChatbot $chatbot
     *
     * @return self
     */
    public function setChatbot(ApiChatbot $chatbot): self
    {
        $this->initialized['chatbot'] = true;
        $this->chatbot = $chatbot;
        return $this;
    }
    /**
     * Chatbot identifiers
     *
     * @return list<ApiAgentChatbotIdentifier>
     */
    public function getChatbotIdentifiers(): array
    {
        return $this->chatbotIdentifiers;
    }
    /**
     * Chatbot identifiers
     *
     * @param list<ApiAgentChatbotIdentifier> $chatbotIdentifiers
     *
     * @return self
     */
    public function setChatbotIdentifiers(array $chatbotIdentifiers): self
    {
        $this->initialized['chatbotIdentifiers'] = true;
        $this->chatbotIdentifiers = $chatbotIdentifiers;
        return $this;
    }
    /**
     * Child agents
     *
     * @return list<ApiAgent>
     */
    public function getChildAgents(): array
    {
        return $this->childAgents;
    }
    /**
     * Child agents
     *
     * @param list<ApiAgent> $childAgents
     *
     * @return self
     */
    public function setChildAgents(array $childAgents): self
    {
        $this->initialized['childAgents'] = true;
        $this->childAgents = $childAgents;
        return $this;
    }
    /**
     * Whether conversation logs are enabled for the agent
     *
     * @return bool
     */
    public function getConversationLogsEnabled(): bool
    {
        return $this->conversationLogsEnabled;
    }
    /**
     * Whether conversation logs are enabled for the agent
     *
     * @param bool $conversationLogsEnabled
     *
     * @return self
     */
    public function setConversationLogsEnabled(bool $conversationLogsEnabled): self
    {
        $this->initialized['conversationLogsEnabled'] = true;
        $this->conversationLogsEnabled = $conversationLogsEnabled;
        return $this;
    }
    /**
     * Creation date / time
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date / time
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Description of deployment
     *
     * @return ApiDeployment
     */
    public function getDeployment(): ApiDeployment
    {
        return $this->deployment;
    }
    /**
     * Description of deployment
     *
     * @param ApiDeployment $deployment
     *
     * @return self
     */
    public function setDeployment(ApiDeployment $deployment): self
    {
        $this->initialized['deployment'] = true;
        $this->deployment = $deployment;
        return $this;
    }
    /**
     * Description of agent
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of agent
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
     * @return list<ApiAgentFunction>
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }
    /**
     * @param list<ApiAgentFunction> $functions
     *
     * @return self
     */
    public function setFunctions(array $functions): self
    {
        $this->initialized['functions'] = true;
        $this->functions = $functions;
        return $this;
    }
    /**
     * The guardrails the agent is attached to
     *
     * @return list<ApiAgentGuardrail>
     */
    public function getGuardrails(): array
    {
        return $this->guardrails;
    }
    /**
     * The guardrails the agent is attached to
     *
     * @param list<ApiAgentGuardrail> $guardrails
     *
     * @return self
     */
    public function setGuardrails(array $guardrails): self
    {
        $this->initialized['guardrails'] = true;
        $this->guardrails = $guardrails;
        return $this;
    }
    /**
     * @return string
     */
    public function getIfCase(): string
    {
        return $this->ifCase;
    }
    /**
     * @param string $ifCase
     *
     * @return self
     */
    public function setIfCase(string $ifCase): self
    {
        $this->initialized['ifCase'] = true;
        $this->ifCase = $ifCase;
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
     * @return int
     */
    public function getK(): int
    {
        return $this->k;
    }
    /**
     * @param int $k
     *
     * @return self
     */
    public function setK(int $k): self
    {
        $this->initialized['k'] = true;
        $this->k = $k;
        return $this;
    }
    /**
     * Knowledge bases
     *
     * @return list<ApiKnowledgeBase>
     */
    public function getKnowledgeBases(): array
    {
        return $this->knowledgeBases;
    }
    /**
     * Knowledge bases
     *
     * @param list<ApiKnowledgeBase> $knowledgeBases
     *
     * @return self
     */
    public function setKnowledgeBases(array $knowledgeBases): self
    {
        $this->initialized['knowledgeBases'] = true;
        $this->knowledgeBases = $knowledgeBases;
        return $this;
    }
    /**
     * @return ApiAgentLoggingConfig
     */
    public function getLoggingConfig(): ApiAgentLoggingConfig
    {
        return $this->loggingConfig;
    }
    /**
     * @param ApiAgentLoggingConfig $loggingConfig
     *
     * @return self
     */
    public function setLoggingConfig(ApiAgentLoggingConfig $loggingConfig): self
    {
        $this->initialized['loggingConfig'] = true;
        $this->loggingConfig = $loggingConfig;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxTokens(): int
    {
        return $this->maxTokens;
    }
    /**
     * @param int $maxTokens
     *
     * @return self
     */
    public function setMaxTokens(int $maxTokens): self
    {
        $this->initialized['maxTokens'] = true;
        $this->maxTokens = $maxTokens;
        return $this;
    }
    /**
     * Description of a Model
     *
     * @return ApiModel
     */
    public function getModel(): ApiModel
    {
        return $this->model;
    }
    /**
     * Description of a Model
     *
     * @param ApiModel $model
     *
     * @return self
     */
    public function setModel(ApiModel $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
    /**
     * @return ApiModelProviderKeyInfo
     */
    public function getModelProviderKey(): ApiModelProviderKeyInfo
    {
        return $this->modelProviderKey;
    }
    /**
     * @param ApiModelProviderKeyInfo $modelProviderKey
     *
     * @return self
     */
    public function setModelProviderKey(ApiModelProviderKeyInfo $modelProviderKey): self
    {
        $this->initialized['modelProviderKey'] = true;
        $this->modelProviderKey = $modelProviderKey;
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
     * OpenAI API Key Info
     *
     * @return ApiOpenAIAPIKeyInfo
     */
    public function getOpenaiApiKey(): ApiOpenAIAPIKeyInfo
    {
        return $this->openaiApiKey;
    }
    /**
     * OpenAI API Key Info
     *
     * @param ApiOpenAIAPIKeyInfo $openaiApiKey
     *
     * @return self
     */
    public function setOpenaiApiKey(ApiOpenAIAPIKeyInfo $openaiApiKey): self
    {
        $this->initialized['openaiApiKey'] = true;
        $this->openaiApiKey = $openaiApiKey;
        return $this;
    }
    /**
     * Parent agents
     *
     * @return list<ApiAgent>
     */
    public function getParentAgents(): array
    {
        return $this->parentAgents;
    }
    /**
     * Parent agents
     *
     * @param list<ApiAgent> $parentAgents
     *
     * @return self
     */
    public function setParentAgents(array $parentAgents): self
    {
        $this->initialized['parentAgents'] = true;
        $this->parentAgents = $parentAgents;
        return $this;
    }
    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
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
     * Whether the agent should provide in-response citations
     *
     * @return bool
     */
    public function getProvideCitations(): bool
    {
        return $this->provideCitations;
    }
    /**
     * Whether the agent should provide in-response citations
     *
     * @param bool $provideCitations
     *
     * @return self
     */
    public function setProvideCitations(bool $provideCitations): self
    {
        $this->initialized['provideCitations'] = true;
        $this->provideCitations = $provideCitations;
        return $this;
    }
    /**
     * Region code
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region code
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
     * - RETRIEVAL_METHOD_UNKNOWN: The retrieval method is unknown
     *  - RETRIEVAL_METHOD_REWRITE: The retrieval method is rewrite
     *  - RETRIEVAL_METHOD_STEP_BACK: The retrieval method is step back
     *  - RETRIEVAL_METHOD_SUB_QUERIES: The retrieval method is sub queries
     *  - RETRIEVAL_METHOD_NONE: The retrieval method is none
     *
     * @return string
     */
    public function getRetrievalMethod(): string
    {
        return $this->retrievalMethod;
    }
    /**
    * - RETRIEVAL_METHOD_UNKNOWN: The retrieval method is unknown
    - RETRIEVAL_METHOD_REWRITE: The retrieval method is rewrite
    - RETRIEVAL_METHOD_STEP_BACK: The retrieval method is step back
    - RETRIEVAL_METHOD_SUB_QUERIES: The retrieval method is sub queries
    - RETRIEVAL_METHOD_NONE: The retrieval method is none
    *
    * @param string $retrievalMethod
    *
    * @return self
    */
    public function setRetrievalMethod(string $retrievalMethod): self
    {
        $this->initialized['retrievalMethod'] = true;
        $this->retrievalMethod = $retrievalMethod;
        return $this;
    }
    /**
     * Creation of route date / time
     *
     * @return \DateTime
     */
    public function getRouteCreatedAt(): \DateTime
    {
        return $this->routeCreatedAt;
    }
    /**
     * Creation of route date / time
     *
     * @param \DateTime $routeCreatedAt
     *
     * @return self
     */
    public function setRouteCreatedAt(\DateTime $routeCreatedAt): self
    {
        $this->initialized['routeCreatedAt'] = true;
        $this->routeCreatedAt = $routeCreatedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getRouteCreatedBy(): string
    {
        return $this->routeCreatedBy;
    }
    /**
     * @param string $routeCreatedBy
     *
     * @return self
     */
    public function setRouteCreatedBy(string $routeCreatedBy): self
    {
        $this->initialized['routeCreatedBy'] = true;
        $this->routeCreatedBy = $routeCreatedBy;
        return $this;
    }
    /**
     * Route name
     *
     * @return string
     */
    public function getRouteName(): string
    {
        return $this->routeName;
    }
    /**
     * Route name
     *
     * @param string $routeName
     *
     * @return self
     */
    public function setRouteName(string $routeName): self
    {
        $this->initialized['routeName'] = true;
        $this->routeName = $routeName;
        return $this;
    }
    /**
     * @return string
     */
    public function getRouteUuid(): string
    {
        return $this->routeUuid;
    }
    /**
     * @param string $routeUuid
     *
     * @return self
     */
    public function setRouteUuid(string $routeUuid): self
    {
        $this->initialized['routeUuid'] = true;
        $this->routeUuid = $routeUuid;
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
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }
    /**
     * @param float $temperature
     *
     * @return self
     */
    public function setTemperature(float $temperature): self
    {
        $this->initialized['temperature'] = true;
        $this->temperature = $temperature;
        return $this;
    }
    /**
     * Represents an AgentTemplate entity
     *
     * @return ApiAgentTemplate
     */
    public function getTemplate(): ApiAgentTemplate
    {
        return $this->template;
    }
    /**
     * Represents an AgentTemplate entity
     *
     * @param ApiAgentTemplate $template
     *
     * @return self
     */
    public function setTemplate(ApiAgentTemplate $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
        return $this;
    }
    /**
     * @return float
     */
    public function getTopP(): float
    {
        return $this->topP;
    }
    /**
     * @param float $topP
     *
     * @return self
     */
    public function setTopP(float $topP): self
    {
        $this->initialized['topP'] = true;
        $this->topP = $topP;
        return $this;
    }
    /**
     * Last modified
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last modified
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Access your agent under this url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Access your agent under this url
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Id of user that created the agent
     *
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * Id of user that created the agent
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * Unique agent id
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique agent id
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * The latest version of the agent
     *
     * @return string
     */
    public function getVersionHash(): string
    {
        return $this->versionHash;
    }
    /**
     * The latest version of the agent
     *
     * @param string $versionHash
     *
     * @return self
     */
    public function setVersionHash(string $versionHash): self
    {
        $this->initialized['versionHash'] = true;
        $this->versionHash = $versionHash;
        return $this;
    }
    /**
     * VPC Egress IPs
     *
     * @return list<string>
     */
    public function getVpcEgressIps(): array
    {
        return $this->vpcEgressIps;
    }
    /**
     * VPC Egress IPs
     *
     * @param list<string> $vpcEgressIps
     *
     * @return self
     */
    public function setVpcEgressIps(array $vpcEgressIps): self
    {
        $this->initialized['vpcEgressIps'] = true;
        $this->vpcEgressIps = $vpcEgressIps;
        return $this;
    }
    /**
     * @return string
     */
    public function getVpcUuid(): string
    {
        return $this->vpcUuid;
    }
    /**
     * @param string $vpcUuid
     *
     * @return self
     */
    public function setVpcUuid(string $vpcUuid): self
    {
        $this->initialized['vpcUuid'] = true;
        $this->vpcUuid = $vpcUuid;
        return $this;
    }
    /**
     * @return ApiWorkspace
     */
    public function getWorkspace(): ApiWorkspace
    {
        return $this->workspace;
    }
    /**
     * @param ApiWorkspace $workspace
     *
     * @return self
     */
    public function setWorkspace(ApiWorkspace $workspace): self
    {
        $this->initialized['workspace'] = true;
        $this->workspace = $workspace;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['anthropicApiKey' => ['anthropic_api_key', 'getAnthropicApiKey', 'setAnthropicApiKey'], 'apiKeyInfos' => ['api_key_infos', 'getApiKeyInfos', 'setApiKeyInfos'], 'apiKeys' => ['api_keys', 'getApiKeys', 'setApiKeys'], 'chatbot' => ['chatbot', 'getChatbot', 'setChatbot'], 'chatbotIdentifiers' => ['chatbot_identifiers', 'getChatbotIdentifiers', 'setChatbotIdentifiers'], 'childAgents' => ['child_agents', 'getChildAgents', 'setChildAgents'], 'conversationLogsEnabled' => ['conversation_logs_enabled', 'getConversationLogsEnabled', 'setConversationLogsEnabled'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'deployment' => ['deployment', 'getDeployment', 'setDeployment'], 'description' => ['description', 'getDescription', 'setDescription'], 'functions' => ['functions', 'getFunctions', 'setFunctions'], 'guardrails' => ['guardrails', 'getGuardrails', 'setGuardrails'], 'ifCase' => ['if_case', 'getIfCase', 'setIfCase'], 'instruction' => ['instruction', 'getInstruction', 'setInstruction'], 'k' => ['k', 'getK', 'setK'], 'knowledgeBases' => ['knowledge_bases', 'getKnowledgeBases', 'setKnowledgeBases'], 'loggingConfig' => ['logging_config', 'getLoggingConfig', 'setLoggingConfig'], 'maxTokens' => ['max_tokens', 'getMaxTokens', 'setMaxTokens'], 'model' => ['model', 'getModel', 'setModel'], 'modelProviderKey' => ['model_provider_key', 'getModelProviderKey', 'setModelProviderKey'], 'name' => ['name', 'getName', 'setName'], 'openaiApiKey' => ['openai_api_key', 'getOpenaiApiKey', 'setOpenaiApiKey'], 'parentAgents' => ['parent_agents', 'getParentAgents', 'setParentAgents'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId'], 'provideCitations' => ['provide_citations', 'getProvideCitations', 'setProvideCitations'], 'region' => ['region', 'getRegion', 'setRegion'], 'retrievalMethod' => ['retrieval_method', 'getRetrievalMethod', 'setRetrievalMethod'], 'routeCreatedAt' => ['route_created_at', 'getRouteCreatedAt', 'setRouteCreatedAt'], 'routeCreatedBy' => ['route_created_by', 'getRouteCreatedBy', 'setRouteCreatedBy'], 'routeName' => ['route_name', 'getRouteName', 'setRouteName'], 'routeUuid' => ['route_uuid', 'getRouteUuid', 'setRouteUuid'], 'tags' => ['tags', 'getTags', 'setTags'], 'temperature' => ['temperature', 'getTemperature', 'setTemperature'], 'template' => ['template', 'getTemplate', 'setTemplate'], 'topP' => ['top_p', 'getTopP', 'setTopP'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'url' => ['url', 'getUrl', 'setUrl'], 'userId' => ['user_id', 'getUserId', 'setUserId'], 'uuid' => ['uuid', 'getUuid', 'setUuid'], 'versionHash' => ['version_hash', 'getVersionHash', 'setVersionHash'], 'vpcEgressIps' => ['vpc_egress_ips', 'getVpcEgressIps', 'setVpcEgressIps'], 'vpcUuid' => ['vpc_uuid', 'getVpcUuid', 'setVpcUuid'], 'workspace' => ['workspace', 'getWorkspace', 'setWorkspace']];
    }
}