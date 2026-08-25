<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiLinkAgentOutput implements AdditionalPropertiesInterface
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
     * Routed agent id
     *
     * @var string
     */
    protected $childAgentUuid;
    /**
     * A unique identifier for the parent agent.
     *
     * @var string
     */
    protected $parentAgentUuid;
    /**
     * Routed agent id
     *
     * @return string
     */
    public function getChildAgentUuid(): string
    {
        return $this->childAgentUuid;
    }
    /**
     * Routed agent id
     *
     * @param string $childAgentUuid
     *
     * @return self
     */
    public function setChildAgentUuid(string $childAgentUuid): self
    {
        $this->initialized['childAgentUuid'] = true;
        $this->childAgentUuid = $childAgentUuid;
        return $this;
    }
    /**
     * A unique identifier for the parent agent.
     *
     * @return string
     */
    public function getParentAgentUuid(): string
    {
        return $this->parentAgentUuid;
    }
    /**
     * A unique identifier for the parent agent.
     *
     * @param string $parentAgentUuid
     *
     * @return self
     */
    public function setParentAgentUuid(string $parentAgentUuid): self
    {
        $this->initialized['parentAgentUuid'] = true;
        $this->parentAgentUuid = $parentAgentUuid;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['childAgentUuid' => ['child_agent_uuid', 'getChildAgentUuid', 'setChildAgentUuid'], 'parentAgentUuid' => ['parent_agent_uuid', 'getParentAgentUuid', 'setParentAgentUuid']];
    }
}