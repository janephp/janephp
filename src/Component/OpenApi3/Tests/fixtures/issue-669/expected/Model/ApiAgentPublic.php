<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * Instructions to the agent on how to use the route
     *
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
     * Description of a Model
     *
     * @var ApiModel
     */
    public ApiModel $model;
    /**
     * Agent name
     *
     * @var string
     */
    public string $name;
    /**
     * The DigitalOcean project ID associated with the agent
     *
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
     * Id of user that created the route
     *
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
     * Route uuid
     *
     * @var string
     */
    public string $routeUuid;
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
     * Represents an AgentTemplate entity
     *
     * @var ApiAgentTemplate
     */
    public ApiAgentTemplate $template;
    /**
     * Defines the cumulative probability threshold for word selection, specified as a number between 0 and 1. Higher values allow for more diverse outputs, while lower values ensure focused and coherent responses.
     *
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
    public function definedProperties(): array
    {
        return ['chatbot' => 'chatbot', 'chatbotIdentifiers' => 'chatbot_identifiers', 'createdAt' => 'created_at', 'deployment' => 'deployment', 'description' => 'description', 'ifCase' => 'if_case', 'instruction' => 'instruction', 'k' => 'k', 'maxTokens' => 'max_tokens', 'model' => 'model', 'name' => 'name', 'projectId' => 'project_id', 'provideCitations' => 'provide_citations', 'region' => 'region', 'retrievalMethod' => 'retrieval_method', 'routeCreatedAt' => 'route_created_at', 'routeCreatedBy' => 'route_created_by', 'routeName' => 'route_name', 'routeUuid' => 'route_uuid', 'tags' => 'tags', 'temperature' => 'temperature', 'template' => 'template', 'topP' => 'top_p', 'updatedAt' => 'updated_at', 'url' => 'url', 'userId' => 'user_id', 'uuid' => 'uuid', 'versionHash' => 'version_hash'];
    }
}