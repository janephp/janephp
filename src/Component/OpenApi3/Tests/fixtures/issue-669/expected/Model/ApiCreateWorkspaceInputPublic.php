<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateWorkspaceInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Ids of the agents(s) to attach to the workspace
     *
     * @var list<string>
     */
    protected $agentUuids;
    /**
     * Description of the workspace
     *
     * @var string
     */
    protected $description;
    /**
     * Name of the workspace
     *
     * @var string
     */
    protected $name;
    /**
     * Ids of the agents(s) to attach to the workspace
     *
     * @return list<string>
     */
    public function getAgentUuids(): array
    {
        return $this->agentUuids;
    }
    /**
     * Ids of the agents(s) to attach to the workspace
     *
     * @param list<string> $agentUuids
     *
     * @return self
     */
    public function setAgentUuids(array $agentUuids): self
    {
        $this->initialized['agentUuids'] = true;
        $this->agentUuids = $agentUuids;
        return $this;
    }
    /**
     * Description of the workspace
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the workspace
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Name of the workspace
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the workspace
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['agentUuids' => ['agent_uuids', 'getAgentUuids', 'setAgentUuids'], 'description' => ['description', 'getDescription', 'setDescription'], 'name' => ['name', 'getName', 'setName']];
    }
}