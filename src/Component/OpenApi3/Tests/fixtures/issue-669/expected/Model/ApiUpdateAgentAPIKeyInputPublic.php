<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateAgentAPIKeyInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agent id
     *
     * @var string
     */
    public string $agentUuid;
    /**
     * API key ID
     *
     * @var string
     */
    public string $apiKeyUuid;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['agentUuid' => 'agent_uuid', 'apiKeyUuid' => 'api_key_uuid', 'name' => 'name'];
    }
}