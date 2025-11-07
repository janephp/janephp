<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiAgentChildRelationshipVerion extends \ArrayObject
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
     * Name of the child agent
     *
     * @var string
     */
    protected $agentName;
    /**
     * Child agent unique identifier
     *
     * @var string
     */
    protected $childAgentUuid;
    /**
     * If case
     *
     * @var string
     */
    protected $ifCase;
    /**
     * Child agent is deleted
     *
     * @var bool
     */
    protected $isDeleted;
    /**
     * Route name
     *
     * @var string
     */
    protected $routeName;
    /**
     * Name of the child agent
     *
     * @return string
     */
    public function getAgentName(): string
    {
        return $this->agentName;
    }
    /**
     * Name of the child agent
     *
     * @param string $agentName
     *
     * @return self
     */
    public function setAgentName(string $agentName): self
    {
        $this->initialized['agentName'] = true;
        $this->agentName = $agentName;
        return $this;
    }
    /**
     * Child agent unique identifier
     *
     * @return string
     */
    public function getChildAgentUuid(): string
    {
        return $this->childAgentUuid;
    }
    /**
     * Child agent unique identifier
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
     * If case
     *
     * @return string
     */
    public function getIfCase(): string
    {
        return $this->ifCase;
    }
    /**
     * If case
     *
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
     * Child agent is deleted
     *
     * @return bool
     */
    public function getIsDeleted(): bool
    {
        return $this->isDeleted;
    }
    /**
     * Child agent is deleted
     *
     * @param bool $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(bool $isDeleted): self
    {
        $this->initialized['isDeleted'] = true;
        $this->isDeleted = $isDeleted;
        return $this;
    }
    /**
     * Route name
     *
     * @return string
     */
    public function getRouteName(): string
    {
        return $this->routeName;
    }
    /**
     * Route name
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
}