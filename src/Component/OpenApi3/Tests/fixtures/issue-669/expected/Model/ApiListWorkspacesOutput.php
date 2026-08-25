<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListWorkspacesOutput implements AdditionalPropertiesInterface
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
     * Workspaces
     *
     * @var list<ApiWorkspace>
     */
    protected $workspaces;
    /**
     * Workspaces
     *
     * @return list<ApiWorkspace>
     */
    public function getWorkspaces(): array
    {
        return $this->workspaces;
    }
    /**
     * Workspaces
     *
     * @param list<ApiWorkspace> $workspaces
     *
     * @return self
     */
    public function setWorkspaces(array $workspaces): self
    {
        $this->initialized['workspaces'] = true;
        $this->workspaces = $workspaces;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['workspaces' => ['workspaces', 'getWorkspaces', 'setWorkspaces']];
    }
}