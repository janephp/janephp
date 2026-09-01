<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentGuardrailVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Whether the guardrail is deleted
     *
     * @var bool
     */
    public bool $isDeleted;
    /**
     * Guardrail Name
     *
     * @var string
     */
    public string $name;
    /**
     * Guardrail Priority
     *
     * @var int
     */
    public int $priority;
    /**
     * Guardrail UUID
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['isDeleted' => 'is_deleted', 'name' => 'name', 'priority' => 'priority', 'uuid' => 'uuid'];
    }
}