<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateLinkedAgentInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Routed agent id
     *
     * @var string
     */
    public string $childAgentUuid;
    /**
     * Describes the case in which the child agent should be used
     *
     * @var string
     */
    public string $ifCase;
    /**
     * A unique identifier for the parent agent.
     *
     * @var string
     */
    public string $parentAgentUuid;
    /**
     * Route name
     *
     * @var string
     */
    public string $routeName;
    /**
     * Unique id of linkage
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['childAgentUuid' => 'child_agent_uuid', 'ifCase' => 'if_case', 'parentAgentUuid' => 'parent_agent_uuid', 'routeName' => 'route_name', 'uuid' => 'uuid'];
    }
}