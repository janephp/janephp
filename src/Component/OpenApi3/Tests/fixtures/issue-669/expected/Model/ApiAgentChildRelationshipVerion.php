<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentChildRelationshipVerion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the child agent
     *
     * @var string
     */
    public string $agentName;
    /**
     * Child agent unique identifier
     *
     * @var string
     */
    public string $childAgentUuid;
    /**
     * If case
     *
     * @var string
     */
    public string $ifCase;
    /**
     * Child agent is deleted
     *
     * @var bool
     */
    public bool $isDeleted;
    /**
     * Route name
     *
     * @var string
     */
    public string $routeName;
    public function definedProperties(): array
    {
        return ['agentName' => 'agent_name', 'childAgentUuid' => 'child_agent_uuid', 'ifCase' => 'if_case', 'isDeleted' => 'is_deleted', 'routeName' => 'route_name'];
    }
}