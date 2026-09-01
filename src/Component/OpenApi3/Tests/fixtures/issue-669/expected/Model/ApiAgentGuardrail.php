<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentGuardrail implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $agentUuid;
    /**
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var string
     */
    public string $defaultResponse;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $guardrailUuid;
    /**
     * @var bool
     */
    public bool $isAttached;
    /**
     * @var bool
     */
    public bool $isDefault;
    /**
     * @var array<string, mixed>
     */
    public iterable $metadata;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var int
     */
    public int $priority;
    /**
     * @var string
     */
    public string $type = 'GUARDRAIL_TYPE_UNKNOWN';
    /**
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['agentUuid' => 'agent_uuid', 'createdAt' => 'created_at', 'defaultResponse' => 'default_response', 'description' => 'description', 'guardrailUuid' => 'guardrail_uuid', 'isAttached' => 'is_attached', 'isDefault' => 'is_default', 'metadata' => 'metadata', 'name' => 'name', 'priority' => 'priority', 'type' => 'type', 'updatedAt' => 'updated_at', 'uuid' => 'uuid'];
    }
}