<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateWorkspaceInputPublic implements AdditionalPropertiesInterface
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
     * The new description of the workspace
     *
     * @var string
     */
    protected $description;
    /**
     * The new name of the workspace
     *
     * @var string
     */
    protected $name;
    /**
     * Workspace UUID.
     *
     * @var string
     */
    protected $workspaceUuid;
    /**
     * The new description of the workspace
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * The new description of the workspace
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The new name of the workspace
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The new name of the workspace
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Workspace UUID.
     *
     * @return string
     */
    public function getWorkspaceUuid(): string
    {
        return $this->workspaceUuid;
    }
    /**
     * Workspace UUID.
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
    public function definedProperties(): array
    {
        return ['description' => ['description', 'getDescription', 'setDescription'], 'name' => ['name', 'getName', 'setName'], 'workspaceUuid' => ['workspace_uuid', 'getWorkspaceUuid', 'setWorkspaceUuid']];
    }
}