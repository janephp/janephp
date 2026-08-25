<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentTemplate implements AdditionalPropertiesInterface
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
     * The agent template's creation date
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Deprecated - Use summary instead
     *
     * @var string
     */
    protected $description;
    /**
     * List of guardrails associated with the agent template
     *
     * @var list<ApiAgentTemplateGuardrail>
     */
    protected $guardrails;
    /**
     * Instructions for the agent template
     *
     * @var string
     */
    protected $instruction;
    /**
     * The 'k' value for the agent template
     *
     * @var int
     */
    protected $k;
    /**
     * List of knowledge bases associated with the agent template
     *
     * @var list<ApiKnowledgeBase>
     */
    protected $knowledgeBases;
    /**
     * The long description of the agent template
     *
     * @var string
     */
    protected $longDescription;
    /**
     * The max_tokens setting for the agent template
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
     * Name of the agent template
     *
     * @var string
     */
    protected $name;
    /**
     * The short description of the agent template
     *
     * @var string
     */
    protected $shortDescription;
    /**
     * The summary of the agent template
     *
     * @var string
     */
    protected $summary;
    /**
     * List of tags associated with the agent template
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * The temperature setting for the agent template
     *
     * @var float
     */
    protected $temperature;
    /**
     * - AGENT_TEMPLATE_TYPE_STANDARD: The standard agent template
     *  - AGENT_TEMPLATE_TYPE_ONE_CLICK: The one click agent template
     *
     * @var string
     */
    protected $templateType = 'AGENT_TEMPLATE_TYPE_STANDARD';
    /**
     * The top_p setting for the agent template
     *
     * @var float
     */
    protected $topP;
    /**
     * The agent template's last updated date
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique id
     *
     * @var string
     */
    protected $uuid;
    /**
     * The agent template's creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The agent template's creation date
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
     * Deprecated - Use summary instead
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Deprecated - Use summary instead
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
     * List of guardrails associated with the agent template
     *
     * @return list<ApiAgentTemplateGuardrail>
     */
    public function getGuardrails(): array
    {
        return $this->guardrails;
    }
    /**
     * List of guardrails associated with the agent template
     *
     * @param list<ApiAgentTemplateGuardrail> $guardrails
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
     * Instructions for the agent template
     *
     * @return string
     */
    public function getInstruction(): string
    {
        return $this->instruction;
    }
    /**
     * Instructions for the agent template
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
     * The 'k' value for the agent template
     *
     * @return int
     */
    public function getK(): int
    {
        return $this->k;
    }
    /**
     * The 'k' value for the agent template
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
     * List of knowledge bases associated with the agent template
     *
     * @return list<ApiKnowledgeBase>
     */
    public function getKnowledgeBases(): array
    {
        return $this->knowledgeBases;
    }
    /**
     * List of knowledge bases associated with the agent template
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
     * The long description of the agent template
     *
     * @return string
     */
    public function getLongDescription(): string
    {
        return $this->longDescription;
    }
    /**
     * The long description of the agent template
     *
     * @param string $longDescription
     *
     * @return self
     */
    public function setLongDescription(string $longDescription): self
    {
        $this->initialized['longDescription'] = true;
        $this->longDescription = $longDescription;
        return $this;
    }
    /**
     * The max_tokens setting for the agent template
     *
     * @return int
     */
    public function getMaxTokens(): int
    {
        return $this->maxTokens;
    }
    /**
     * The max_tokens setting for the agent template
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
     * Name of the agent template
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the agent template
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
     * The short description of the agent template
     *
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
    /**
     * The short description of the agent template
     *
     * @param string $shortDescription
     *
     * @return self
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->initialized['shortDescription'] = true;
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * The summary of the agent template
     *
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }
    /**
     * The summary of the agent template
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
    /**
     * List of tags associated with the agent template
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * List of tags associated with the agent template
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
     * The temperature setting for the agent template
     *
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }
    /**
     * The temperature setting for the agent template
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
     * - AGENT_TEMPLATE_TYPE_STANDARD: The standard agent template
     *  - AGENT_TEMPLATE_TYPE_ONE_CLICK: The one click agent template
     *
     * @return string
     */
    public function getTemplateType(): string
    {
        return $this->templateType;
    }
    /**
    * - AGENT_TEMPLATE_TYPE_STANDARD: The standard agent template
    - AGENT_TEMPLATE_TYPE_ONE_CLICK: The one click agent template
    *
    * @param string $templateType
    *
    * @return self
    */
    public function setTemplateType(string $templateType): self
    {
        $this->initialized['templateType'] = true;
        $this->templateType = $templateType;
        return $this;
    }
    /**
     * The top_p setting for the agent template
     *
     * @return float
     */
    public function getTopP(): float
    {
        return $this->topP;
    }
    /**
     * The top_p setting for the agent template
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
     * The agent template's last updated date
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The agent template's last updated date
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
     * Unique id
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id
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
        return ['createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'description' => ['description', 'getDescription', 'setDescription'], 'guardrails' => ['guardrails', 'getGuardrails', 'setGuardrails'], 'instruction' => ['instruction', 'getInstruction', 'setInstruction'], 'k' => ['k', 'getK', 'setK'], 'knowledgeBases' => ['knowledge_bases', 'getKnowledgeBases', 'setKnowledgeBases'], 'longDescription' => ['long_description', 'getLongDescription', 'setLongDescription'], 'maxTokens' => ['max_tokens', 'getMaxTokens', 'setMaxTokens'], 'model' => ['model', 'getModel', 'setModel'], 'name' => ['name', 'getName', 'setName'], 'shortDescription' => ['short_description', 'getShortDescription', 'setShortDescription'], 'summary' => ['summary', 'getSummary', 'setSummary'], 'tags' => ['tags', 'getTags', 'setTags'], 'temperature' => ['temperature', 'getTemperature', 'setTemperature'], 'templateType' => ['template_type', 'getTemplateType', 'setTemplateType'], 'topP' => ['top_p', 'getTopP', 'setTopP'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'uuid' => ['uuid', 'getUuid', 'setUuid']];
    }
}