<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiMoveAgentsToWorkspaceOutput implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['workspace' => ['workspace', 'getWorkspace', 'setWorkspace']];
    }
}