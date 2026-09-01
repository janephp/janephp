<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiLinkAgentInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Routed agent id
     *
     * @var string
     */
    public string $childAgentUuid;
    /**
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
     * Name of route
     *
     * @var string
     */
    public string $routeName;
    public function definedProperties(): array
    {
        return ['childAgentUuid' => 'child_agent_uuid', 'ifCase' => 'if_case', 'parentAgentUuid' => 'parent_agent_uuid', 'routeName' => 'route_name'];
    }
}