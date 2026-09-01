<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDeleteWorkspaceOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Workspace
     *
     * @var string
     */
    public string $workspaceUuid;
    public function definedProperties(): array
    {
        return ['workspaceUuid' => 'workspace_uuid'];
    }
}