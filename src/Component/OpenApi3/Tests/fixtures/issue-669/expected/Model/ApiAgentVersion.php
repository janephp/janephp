<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiAgentVersion extends \ArrayObject
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
     * Uuid of the agent this version belongs to
     *
     * @var string
     */
    protected $agentUuid;
    /**
     * List of child agent relationships
     *
     * @var list<ApiAgentChildRelationshipVerion>
     */
    protected $attachedChildAgents;
    /**
     * List of function versions
     *
     * @var list<ApiAgentFunctionVersion>
     */
    protected $attachedFunctions;
    /**
     * List of guardrail version
     *
     * @var list<ApiAgentGuardrailVersion>
     */
    protected $attachedGuardrails;
    /**
     * List of knowledge base agent versions
     *
     * @var list<ApiAgentKnowledgeBaseVersion>
     */
    protected $attachedKnowledgebases;
    /**
     * Whether the version is able to be rolled back to
     *
     * @var bool
     */
    protected $canRollback;
    /**
     * Creation date
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * User who created this version
     *
     * @var string
     */
    protected $createdByEmail;
    /**
     * Whether this is the currently applied configuration
     *
     * @var bool
     */
    protected $currentlyApplied;
    /**
     * Description of the agent
     *
     * @var string
     */
    protected $description;
    /**
     * Unique identifier
     *
     * @var string
     */
    protected $id;
    /**
     * Instruction for the agent
     *
     * @var string
     */
    protected $instruction;
    /**
     * K value for the agent's configuration
     *
     * @var int
     */
    protected $k;
    /**
     * Max tokens setting for the agent
     *
     * @var int
     */
    protected $maxTokens;
    /**
     * Name of model associated to the agent version
     *
     * @var string
     */
    protected $modelName;
    /**
     * Name of the agent
     *
     * @var string
     */
    protected $name;
    /**
     * Whether the agent should provide in-response citations
     *
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
     * Tags associated with the agent
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * Temperature setting for the agent
     *
     * @var float
     */
    protected $temperature;
    /**
     * Top_p setting for the agent
     *
     * @var float
     */
    protected $topP;
    /**
     * Action triggering the configuration update
     *
     * @var string
     */
    protected $triggerAction;
    /**
     * Version hash
     *
     * @var string
     */
    protected $versionHash;
    /**
     * Uuid of the agent this version belongs to
     *
     * @return string
     */
    public function getAgentUuid(): string
    {
        return $this->agentUuid;
    }
    /**
     * Uuid of the agent this version belongs to
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
     * List of child agent relationships
     *
     * @return list<ApiAgentChildRelationshipVerion>
     */
    public function getAttachedChildAgents(): array
    {
        return $this->attachedChildAgents;
    }
    /**
     * List of child agent relationships
     *
     * @param list<ApiAgentChildRelationshipVerion> $attachedChildAgents
     *
     * @return self
     */
    public function setAttachedChildAgents(array $attachedChildAgents): self
    {
        $this->initialized['attachedChildAgents'] = true;
        $this->attachedChildAgents = $attachedChildAgents;
        return $this;
    }
    /**
     * List of function versions
     *
     * @return list<ApiAgentFunctionVersion>
     */
    public function getAttachedFunctions(): array
    {
        return $this->attachedFunctions;
    }
    /**
     * List of function versions
     *
     * @param list<ApiAgentFunctionVersion> $attachedFunctions
     *
     * @return self
     */
    public function setAttachedFunctions(array $attachedFunctions): self
    {
        $this->initialized['attachedFunctions'] = true;
        $this->attachedFunctions = $attachedFunctions;
        return $this;
    }
    /**
     * List of guardrail version
     *
     * @return list<ApiAgentGuardrailVersion>
     */
    public function getAttachedGuardrails(): array
    {
        return $this->attachedGuardrails;
    }
    /**
     * List of guardrail version
     *
     * @param list<ApiAgentGuardrailVersion> $attachedGuardrails
     *
     * @return self
     */
    public function setAttachedGuardrails(array $attachedGuardrails): self
    {
        $this->initialized['attachedGuardrails'] = true;
        $this->attachedGuardrails = $attachedGuardrails;
        return $this;
    }
    /**
     * List of knowledge base agent versions
     *
     * @return list<ApiAgentKnowledgeBaseVersion>
     */
    public function getAttachedKnowledgebases(): array
    {
        return $this->attachedKnowledgebases;
    }
    /**
     * List of knowledge base agent versions
     *
     * @param list<ApiAgentKnowledgeBaseVersion> $attachedKnowledgebases
     *
     * @return self
     */
    public function setAttachedKnowledgebases(array $attachedKnowledgebases): self
    {
        $this->initialized['attachedKnowledgebases'] = true;
        $this->attachedKnowledgebases = $attachedKnowledgebases;
        return $this;
    }
    /**
     * Whether the version is able to be rolled back to
     *
     * @return bool
     */
    public function getCanRollback(): bool
    {
        return $this->canRollback;
    }
    /**
     * Whether the version is able to be rolled back to
     *
     * @param bool $canRollback
     *
     * @return self
     */
    public function setCanRollback(bool $canRollback): self
    {
        $this->initialized['canRollback'] = true;
        $this->canRollback = $canRollback;
        return $this;
    }
    /**
     * Creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date
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
     * User who created this version
     *
     * @return string
     */
    public function getCreatedByEmail(): string
    {
        return $this->createdByEmail;
    }
    /**
     * User who created this version
     *
     * @param string $createdByEmail
     *
     * @return self
     */
    public function setCreatedByEmail(string $createdByEmail): self
    {
        $this->initialized['createdByEmail'] = true;
        $this->createdByEmail = $createdByEmail;
        return $this;
    }
    /**
     * Whether this is the currently applied configuration
     *
     * @return bool
     */
    public function getCurrentlyApplied(): bool
    {
        return $this->currentlyApplied;
    }
    /**
     * Whether this is the currently applied configuration
     *
     * @param bool $currentlyApplied
     *
     * @return self
     */
    public function setCurrentlyApplied(bool $currentlyApplied): self
    {
        $this->initialized['currentlyApplied'] = true;
        $this->currentlyApplied = $currentlyApplied;
        return $this;
    }
    /**
     * Description of the agent
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the agent
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
     * Unique identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Instruction for the agent
     *
     * @return string
     */
    public function getInstruction(): string
    {
        return $this->instruction;
    }
    /**
     * Instruction for the agent
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
     * K value for the agent's configuration
     *
     * @return int
     */
    public function getK(): int
    {
        return $this->k;
    }
    /**
     * K value for the agent's configuration
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
     * Max tokens setting for the agent
     *
     * @return int
     */
    public function getMaxTokens(): int
    {
        return $this->maxTokens;
    }
    /**
     * Max tokens setting for the agent
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
     * Name of model associated to the agent version
     *
     * @return string
     */
    public function getModelName(): string
    {
        return $this->modelName;
    }
    /**
     * Name of model associated to the agent version
     *
     * @param string $modelName
     *
     * @return self
     */
    public function setModelName(string $modelName): self
    {
        $this->initialized['modelName'] = true;
        $this->modelName = $modelName;
        return $this;
    }
    /**
     * Name of the agent
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the agent
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
     * Tags associated with the agent
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * Tags associated with the agent
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
     * Temperature setting for the agent
     *
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }
    /**
     * Temperature setting for the agent
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
     * Top_p setting for the agent
     *
     * @return float
     */
    public function getTopP(): float
    {
        return $this->topP;
    }
    /**
     * Top_p setting for the agent
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
     * Action triggering the configuration update
     *
     * @return string
     */
    public function getTriggerAction(): string
    {
        return $this->triggerAction;
    }
    /**
     * Action triggering the configuration update
     *
     * @param string $triggerAction
     *
     * @return self
     */
    public function setTriggerAction(string $triggerAction): self
    {
        $this->initialized['triggerAction'] = true;
        $this->triggerAction = $triggerAction;
        return $this;
    }
    /**
     * Version hash
     *
     * @return string
     */
    public function getVersionHash(): string
    {
        return $this->versionHash;
    }
    /**
     * Version hash
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
}