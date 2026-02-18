<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateWorkspaceOutput extends \ArrayObject
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
     * @var ApiWorkspace
     */
    protected $workspace;
    /**
     * @return ApiWorkspace
     */
    public function getWorkspace(): ApiWorkspace
    {
        return $this->workspace;
    }
    /**
     * @param ApiWorkspace $workspace
     *
     * @return self
     */
    public function setWorkspace(ApiWorkspace $workspace): self
    {
        $this->initialized['workspace'] = true;
        $this->workspace = $workspace;
        return $this;
    }
}