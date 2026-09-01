<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateWorkspaceInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The new description of the workspace
     *
     * @var string
     */
    public string $description;
    /**
     * The new name of the workspace
     *
     * @var string
     */
    public string $name;
    /**
     * Workspace UUID.
     *
     * @var string
     */
    public string $workspaceUuid;
    public function definedProperties(): array
    {
        return ['description' => 'description', 'name' => 'name', 'workspaceUuid' => 'workspace_uuid'];
    }
}