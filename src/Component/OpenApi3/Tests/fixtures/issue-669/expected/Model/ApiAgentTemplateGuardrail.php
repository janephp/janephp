<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentTemplateGuardrail implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Priority of the guardrail
     *
     * @var int
     */
    public int $priority;
    /**
     * Uuid of the guardrail
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['priority' => 'priority', 'uuid' => 'uuid'];
    }
}