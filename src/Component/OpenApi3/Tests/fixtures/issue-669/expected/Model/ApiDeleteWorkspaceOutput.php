<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiDeleteWorkspaceOutput extends \ArrayObject
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
     * Workspace
     *
     * @var string
     */
    protected $workspaceUuid;
    /**
     * Workspace
     *
     * @return string
     */
    public function getWorkspaceUuid(): string
    {
        return $this->workspaceUuid;
    }
    /**
     * Workspace
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