<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiMoveAgentsToWorkspaceInputPublic extends \ArrayObject
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
     * Agent uuids
     *
     * @var list<string>
     */
    protected $agentUuids;
    /**
     * Workspace uuid to move agents to
     *
     * @var string
     */
    protected $workspaceUuid;
    /**
     * Agent uuids
     *
     * @return list<string>
     */
    public function getAgentUuids(): array
    {
        return $this->agentUuids;
    }
    /**
     * Agent uuids
     *
     * @param list<string> $agentUuids
     *
     * @return self
     */
    public function setAgentUuids(array $agentUuids): self
    {
        $this->initialized['agentUuids'] = true;
        $this->agentUuids = $agentUuids;
        return $this;
    }
    /**
     * Workspace uuid to move agents to
     *
     * @return string
     */
    public function getWorkspaceUuid(): string
    {
        return $this->workspaceUuid;
    }
    /**
     * Workspace uuid to move agents to
     *
     * @param string $workspaceUuid
     *
     * @return self
     */
    public function setWorkspaceUuid(string $workspaceUuid): self
    {
        $this->initialized['workspaceUuid'] = true;
        $this->workspaceUuid = $workspaceUuid;
        return $this;
    }
}