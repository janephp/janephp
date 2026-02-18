<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateLinkedAgentOutput extends \ArrayObject
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
     * @var bool
     */
    protected $rollback;
    /**
     * Unique id of linkage
     *
     * @var string
     */
    protected $uuid;
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
    /**
     * @return bool
     */
    public function getRollback(): bool
    {
        return $this->rollback;
    }
    /**
     * @param bool $rollback
     *
     * @return self
     */
    public function setRollback(bool $rollback): self
    {
        $this->initialized['rollback'] = true;
        $this->rollback = $rollback;
        return $this;
    }
    /**
     * Unique id of linkage
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id of linkage
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
}