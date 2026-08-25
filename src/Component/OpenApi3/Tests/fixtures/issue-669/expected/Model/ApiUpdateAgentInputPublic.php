<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateAgentInputPublic implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $agentLogInsightsEnabled;
    /**
     * Optional list of allowed domains for the chatbot - Must use fully qualified domain name (FQDN) such as https://example.com
     *
     * @var list<string>
     */
    protected $allowedDomains;
    /**
     * Optional anthropic key uuid for use with anthropic models
     *
     * @var string
     */
    protected $anthropicKeyUuid;
    /**
     * Optional update of conversation logs enabled
     *
     * @var bool
     */
    protected $conversationLogsEnabled;
    /**
     * Agent description
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
     * Optional Model Provider uuid for use with provider models
     *
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
     * Optional OpenAI key uuid for use with OpenAI models
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
     * @var bool
     */
    protected $provideCitations;
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
     * Defines the cumulative probability threshold for word selection, specified as a number between 0 and 1. Higher values allow for more diverse outputs, while lower values ensure focused and coherent responses.
     *
     * @var float
     */
    protected $topP;
    /**
     * Unique agent id
     *
     * @var string
     */
    protected $uuid;
    /**
     * @return bool
     */
    public function getAgentLogInsightsEnabled(): bool
    {
        return $this->agentLogInsightsEnabled;
    }
    /**
     * @param bool $agentLogInsightsEnabled
     *
     * @return self
     */
    public function setAgentLogInsightsEnabled(bool $agentLogInsightsEnabled): self
    {
        $this->initialized['agentLogInsightsEnabled'] = true;
        $this->agentLogInsightsEnabled = $agentLogInsightsEnabled;
        return $this;
    }
    /**
     * Optional list of allowed domains for the chatbot - Must use fully qualified domain name (FQDN) such as https://example.com
     *
     * @return list<string>
     */
    public function getAllowedDomains(): array
    {
        return $this->allowedDomains;
    }
    /**
     * Optional list of allowed domains for the chatbot - Must use fully qualified domain name (FQDN) such as https://example.com
     *
     * @param list<string> $allowedDomains
     *
     * @return self
     */
    public function setAllowedDomains(array $allowedDomains): self
    {
        $this->initialized['allowedDomains'] = true;
        $this->allowedDomains = $allowedDomains;
        return $this;
    }
    /**
     * Optional anthropic key uuid for use with anthropic models
     *
     * @return string
     */
    public function getAnthropicKeyUuid(): string
    {
        return $this->anthropicKeyUuid;
    }
    /**
     * Optional anthropic key uuid for use with anthropic models
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
     * Optional update of conversation logs enabled
     *
     * @return bool
     */
    public function getConversationLogsEnabled(): bool
    {
        return $this->conversationLogsEnabled;
    }
    /**
     * Optional update of conversation logs enabled
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
     * Agent description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Agent description
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
     * Optional Model Provider uuid for use with provider models
     *
     * @return string
     */
    public function getModelProviderKeyUuid(): string
    {
        return $this->modelProviderKeyUuid;
    }
    /**
     * Optional Model Provider uuid for use with provider models
     *
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
     * Optional OpenAI key uuid for use with OpenAI models
     *
     * @return string
     */
    public function getOpenAiKeyUuid(): string
    {
        return $this->openAiKeyUuid;
    }
    /**
     * Optional OpenAI key uuid for use with OpenAI models
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
     * @return bool
     */
    public function getProvideCitations(): bool
    {
        return $this->provideCitations;
    }
    /**
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
    public function definedProperties(): array
    {
        return ['agentLogInsightsEnabled' => ['agent_log_insights_enabled', 'getAgentLogInsightsEnabled', 'setAgentLogInsightsEnabled'], 'allowedDomains' => ['allowed_domains', 'getAllowedDomains', 'setAllowedDomains'], 'anthropicKeyUuid' => ['anthropic_key_uuid', 'getAnthropicKeyUuid', 'setAnthropicKeyUuid'], 'conversationLogsEnabled' => ['conversation_logs_enabled', 'getConversationLogsEnabled', 'setConversationLogsEnabled'], 'description' => ['description', 'getDescription', 'setDescription'], 'instruction' => ['instruction', 'getInstruction', 'setInstruction'], 'k' => ['k', 'getK', 'setK'], 'maxTokens' => ['max_tokens', 'getMaxTokens', 'setMaxTokens'], 'modelProviderKeyUuid' => ['model_provider_key_uuid', 'getModelProviderKeyUuid', 'setModelProviderKeyUuid'], 'modelUuid' => ['model_uuid', 'getModelUuid', 'setModelUuid'], 'name' => ['name', 'getName', 'setName'], 'openAiKeyUuid' => ['open_ai_key_uuid', 'getOpenAiKeyUuid', 'setOpenAiKeyUuid'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId'], 'provideCitations' => ['provide_citations', 'getProvideCitations', 'setProvideCitations'], 'retrievalMethod' => ['retrieval_method', 'getRetrievalMethod', 'setRetrievalMethod'], 'tags' => ['tags', 'getTags', 'setTags'], 'temperature' => ['temperature', 'getTemperature', 'setTemperature'], 'topP' => ['top_p', 'getTopP', 'setTopP'], 'uuid' => ['uuid', 'getUuid', 'setUuid']];
    }
}