<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Uuid of the agent this version belongs to
     *
     * @var string
     */
    public string $agentUuid;
    /**
     * List of child agent relationships
     *
     * @var list<ApiAgentChildRelationshipVerion>
     */
    public array $attachedChildAgents;
    /**
     * List of function versions
     *
     * @var list<ApiAgentFunctionVersion>
     */
    public array $attachedFunctions;
    /**
     * List of guardrail version
     *
     * @var list<ApiAgentGuardrailVersion>
     */
    public array $attachedGuardrails;
    /**
     * List of knowledge base agent versions
     *
     * @var list<ApiAgentKnowledgeBaseVersion>
     */
    public array $attachedKnowledgebases;
    /**
     * Whether the version is able to be rolled back to
     *
     * @var bool
     */
    public bool $canRollback;
    /**
     * Creation date
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * User who created this version
     *
     * @var string
     */
    public string $createdByEmail;
    /**
     * Whether this is the currently applied configuration
     *
     * @var bool
     */
    public bool $currentlyApplied;
    /**
     * Description of the agent
     *
     * @var string
     */
    public string $description;
    /**
     * Unique identifier
     *
     * @var string
     */
    public string $id;
    /**
     * Instruction for the agent
     *
     * @var string
     */
    public string $instruction;
    /**
     * K value for the agent's configuration
     *
     * @var int
     */
    public int $k;
    /**
     * Max tokens setting for the agent
     *
     * @var int
     */
    public int $maxTokens;
    /**
     * Name of model associated to the agent version
     *
     * @var string
     */
    public string $modelName;
    /**
     * Name of the agent
     *
     * @var string
     */
    public string $name;
    /**
     * Whether the agent should provide in-response citations
     *
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
     * Tags associated with the agent
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * Temperature setting for the agent
     *
     * @var float
     */
    public float $temperature;
    /**
     * Top_p setting for the agent
     *
     * @var float
     */
    public float $topP;
    /**
     * Action triggering the configuration update
     *
     * @var string
     */
    public string $triggerAction;
    /**
     * Version hash
     *
     * @var string
     */
    public string $versionHash;
    public function definedProperties(): array
    {
        return ['agentUuid' => 'agent_uuid', 'attachedChildAgents' => 'attached_child_agents', 'attachedFunctions' => 'attached_functions', 'attachedGuardrails' => 'attached_guardrails', 'attachedKnowledgebases' => 'attached_knowledgebases', 'canRollback' => 'can_rollback', 'createdAt' => 'created_at', 'createdByEmail' => 'created_by_email', 'currentlyApplied' => 'currently_applied', 'description' => 'description', 'id' => 'id', 'instruction' => 'instruction', 'k' => 'k', 'maxTokens' => 'max_tokens', 'modelName' => 'model_name', 'name' => 'name', 'provideCitations' => 'provide_citations', 'retrievalMethod' => 'retrieval_method', 'tags' => 'tags', 'temperature' => 'temperature', 'topP' => 'top_p', 'triggerAction' => 'trigger_action', 'versionHash' => 'version_hash'];
    }
}