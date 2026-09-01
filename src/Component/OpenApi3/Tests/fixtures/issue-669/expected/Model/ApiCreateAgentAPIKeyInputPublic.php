<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateAgentAPIKeyInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agent id
     *
     * @var string
     */
    public string $agentUuid;
    /**
     * A human friendly name to identify the key
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['agentUuid' => 'agent_uuid', 'name' => 'name'];
    }
}