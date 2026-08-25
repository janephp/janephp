<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentTemplateGuardrail implements AdditionalPropertiesInterface
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
     * Priority of the guardrail
     *
     * @var int
     */
    protected $priority;
    /**
     * Uuid of the guardrail
     *
     * @var string
     */
    protected $uuid;
    /**
     * Priority of the guardrail
     *
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * Priority of the guardrail
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * Uuid of the guardrail
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Uuid of the guardrail
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
        return ['priority' => ['priority', 'getPriority', 'setPriority'], 'uuid' => ['uuid', 'getUuid', 'setUuid']];
    }
}