<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiMoveAgentsToWorkspaceInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agent uuids
     *
     * @var list<string>
     */
    public array $agentUuids;
    /**
     * Workspace uuid to move agents to
     *
     * @var string
     */
    public string $workspaceUuid;
    public function definedProperties(): array
    {
        return ['agentUuids' => 'agent_uuids', 'workspaceUuid' => 'workspace_uuid'];
    }
}