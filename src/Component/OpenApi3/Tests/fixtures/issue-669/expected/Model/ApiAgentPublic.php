<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentPublic implements AdditionalPropertiesInterface
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
     * Instructions to the agent on how to use the route
     *
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
     * How many results should be considered from an attached knowledge base
     *
     * @var int
     */
    protected $k;
    /**
     * Specifies the maximum number of tokens the model can process in a single input or output, set as a number between 1 and 512. This determines the length of each response.
     *
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
     * Agent name
     *
     * @var string
     */
    protected $name;
    /**
     * The DigitalOcean project ID associated with the agent
     *
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
     * Id of user that created the route
     *
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
     * Route uuid
     *
     * @var string
     */
    protected $routeUuid;
    /**
     * A set of abitrary tags to organize your agent
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * Controls the model’s creativity, specified as a number between 0 and 1. Lower values produce more predictable and conservative responses, while higher values encourage creativity and variation.
     *
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
     * Defines the cumulative probability threshold for word selection, specified as a number between 0 and 1. Higher values allow for more diverse outputs, while lower values ensure focused and coherent responses.
     *
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
     * Instructions to the agent on how to use the route
     *
     * @return string
     */
    public function getIfCase(): string
    {
        return $this->ifCase;
    }
    /**
     * Instructions to the agent on how to use the route
     *
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
     * How many results should be considered from an attached knowledge base
     *
     * @return int
     */
    public function getK(): int
    {
        return $this->k;
    }
    /**
     * How many results should be considered from an attached knowledge base
     *
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
     * Specifies the maximum number of tokens the model can process in a single input or output, set as a number between 1 and 512. This determines the length of each response.
     *
     * @return int
     */
    public function getMaxTokens(): int
    {
        return $this->maxTokens;
    }
    /**
     * Specifies the maximum number of tokens the model can process in a single input or output, set as a number between 1 and 512. This determines the length of each response.
     *
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
     * The DigitalOcean project ID associated with the agent
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The DigitalOcean project ID associated with the agent
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
     * Id of user that created the route
     *
     * @return string
     */
    public function getRouteCreatedBy(): string
    {
        return $this->routeCreatedBy;
    }
    /**
     * Id of user that created the route
     *
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
     * Route uuid
     *
     * @return string
     */
    public function getRouteUuid(): string
    {
        return $this->routeUuid;
    }
    /**
     * Route uuid
     *
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
     * A set of abitrary tags to organize your agent
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * A set of abitrary tags to organize your agent
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
     * Controls the model’s creativity, specified as a number between 0 and 1. Lower values produce more predictable and conservative responses, while higher values encourage creativity and variation.
     *
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }
    /**
     * Controls the model’s creativity, specified as a number between 0 and 1. Lower values produce more predictable and conservative responses, while higher values encourage creativity and variation.
     *
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
     * Defines the cumulative probability threshold for word selection, specified as a number between 0 and 1. Higher values allow for more diverse outputs, while lower values ensure focused and coherent responses.
     *
     * @return float
     */
    public function getTopP(): float
    {
        return $this->topP;
    }
    /**
     * Defines the cumulative probability threshold for word selection, specified as a number between 0 and 1. Higher values allow for more diverse outputs, while lower values ensure focused and coherent responses.
     *
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
    public function definedProperties(): array
    {
        return ['chatbot' => ['chatbot', 'getChatbot', 'setChatbot'], 'chatbotIdentifiers' => ['chatbot_identifiers', 'getChatbotIdentifiers', 'setChatbotIdentifiers'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'deployment' => ['deployment', 'getDeployment', 'setDeployment'], 'description' => ['description', 'getDescription', 'setDescription'], 'ifCase' => ['if_case', 'getIfCase', 'setIfCase'], 'instruction' => ['instruction', 'getInstruction', 'setInstruction'], 'k' => ['k', 'getK', 'setK'], 'maxTokens' => ['max_tokens', 'getMaxTokens', 'setMaxTokens'], 'model' => ['model', 'getModel', 'setModel'], 'name' => ['name', 'getName', 'setName'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId'], 'provideCitations' => ['provide_citations', 'getProvideCitations', 'setProvideCitations'], 'region' => ['region', 'getRegion', 'setRegion'], 'retrievalMethod' => ['retrieval_method', 'getRetrievalMethod', 'setRetrievalMethod'], 'routeCreatedAt' => ['route_created_at', 'getRouteCreatedAt', 'setRouteCreatedAt'], 'routeCreatedBy' => ['route_created_by', 'getRouteCreatedBy', 'setRouteCreatedBy'], 'routeName' => ['route_name', 'getRouteName', 'setRouteName'], 'routeUuid' => ['route_uuid', 'getRouteUuid', 'setRouteUuid'], 'tags' => ['tags', 'getTags', 'setTags'], 'temperature' => ['temperature', 'getTemperature', 'setTemperature'], 'template' => ['template', 'getTemplate', 'setTemplate'], 'topP' => ['top_p', 'getTopP', 'setTopP'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'url' => ['url', 'getUrl', 'setUrl'], 'userId' => ['user_id', 'getUserId', 'setUserId'], 'uuid' => ['uuid', 'getUuid', 'setUuid'], 'versionHash' => ['version_hash', 'getVersionHash', 'setVersionHash']];
    }
}