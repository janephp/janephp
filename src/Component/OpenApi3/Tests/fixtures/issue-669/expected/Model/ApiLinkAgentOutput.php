<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiLinkAgentOutput implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['childAgentUuid' => 'child_agent_uuid', 'parentAgentUuid' => 'parent_agent_uuid'];
    }
}