<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentTemplate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The agent template's creation date
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Deprecated - Use summary instead
     *
     * @var string
     */
    public string $description;
    /**
     * List of guardrails associated with the agent template
     *
     * @var list<ApiAgentTemplateGuardrail>
     */
    public array $guardrails;
    /**
     * Instructions for the agent template
     *
     * @var string
     */
    public string $instruction;
    /**
     * The 'k' value for the agent template
     *
     * @var int
     */
    public int $k;
    /**
     * List of knowledge bases associated with the agent template
     *
     * @var list<ApiKnowledgeBase>
     */
    public array $knowledgeBases;
    /**
     * The long description of the agent template
     *
     * @var string
     */
    public string $longDescription;
    /**
     * The max_tokens setting for the agent template
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
     * Name of the agent template
     *
     * @var string
     */
    public string $name;
    /**
     * The short description of the agent template
     *
     * @var string
     */
    public string $shortDescription;
    /**
     * The summary of the agent template
     *
     * @var string
     */
    public string $summary;
    /**
     * List of tags associated with the agent template
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * The temperature setting for the agent template
     *
     * @var float
     */
    public float $temperature;
    /**
     * - AGENT_TEMPLATE_TYPE_STANDARD: The standard agent template
     *  - AGENT_TEMPLATE_TYPE_ONE_CLICK: The one click agent template
     *
     * @var string
     */
    public string $templateType = 'AGENT_TEMPLATE_TYPE_STANDARD';
    /**
     * The top_p setting for the agent template
     *
     * @var float
     */
    public float $topP;
    /**
     * The agent template's last updated date
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Unique id
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['createdAt' => 'created_at', 'description' => 'description', 'guardrails' => 'guardrails', 'instruction' => 'instruction', 'k' => 'k', 'knowledgeBases' => 'knowledge_bases', 'longDescription' => 'long_description', 'maxTokens' => 'max_tokens', 'model' => 'model', 'name' => 'name', 'shortDescription' => 'short_description', 'summary' => 'summary', 'tags' => 'tags', 'temperature' => 'temperature', 'templateType' => 'template_type', 'topP' => 'top_p', 'updatedAt' => 'updated_at', 'uuid' => 'uuid'];
    }
}