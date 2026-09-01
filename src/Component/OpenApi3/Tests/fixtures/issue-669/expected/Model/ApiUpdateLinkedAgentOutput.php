<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateLinkedAgentOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Routed agent id
     *
     * @var string
     */
    public string $childAgentUuid;
    /**
     * A unique identifier for the parent agent.
     *
     * @var string
     */
    public string $parentAgentUuid;
    /**
     * @var bool
     */
    public bool $rollback;
    /**
     * Unique id of linkage
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['childAgentUuid' => 'child_agent_uuid', 'parentAgentUuid' => 'parent_agent_uuid', 'rollback' => 'rollback', 'uuid' => 'uuid'];
    }
}