<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateWorkspaceInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Ids of the agents(s) to attach to the workspace
     *
     * @var list<string>
     */
    public array $agentUuids;
    /**
     * Description of the workspace
     *
     * @var string
     */
    public string $description;
    /**
     * Name of the workspace
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['agentUuids' => 'agent_uuids', 'description' => 'description', 'name' => 'name'];
    }
}