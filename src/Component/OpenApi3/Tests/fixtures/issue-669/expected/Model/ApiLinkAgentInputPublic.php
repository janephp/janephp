<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiLinkAgentInputPublic implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $ifCase;
    /**
     * A unique identifier for the parent agent.
     *
     * @var string
     */
    protected $parentAgentUuid;
    /**
     * Name of route
     *
     * @var string
     */
    protected $routeName;
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
     * @return string
     */
    public function getIfCase(): string
    {
        return $this->ifCase;
    }
    /**
     * @param string $ifCase
     *
     * @return self
     */
    public function setIfCase(string $ifCase): self
    {
        $this->initialized['ifCase'] = true;
        $this->ifCase = $ifCase;
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
    /**
     * Name of route
     *
     * @return string
     */
    public function getRouteName(): string
    {
        return $this->routeName;
    }
    /**
     * Name of route
     *
     * @param string $routeName
     *
     * @return self
     */
    public function setRouteName(string $routeName): self
    {
        $this->initialized['routeName'] = true;
        $this->routeName = $routeName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['childAgentUuid' => ['child_agent_uuid', 'getChildAgentUuid', 'setChildAgentUuid'], 'ifCase' => ['if_case', 'getIfCase', 'setIfCase'], 'parentAgentUuid' => ['parent_agent_uuid', 'getParentAgentUuid', 'setParentAgentUuid'], 'routeName' => ['route_name', 'getRouteName', 'setRouteName']];
    }
}