<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiCreateAgentAPIKeyInputPublic extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Agent id
     *
     * @var string
     */
    protected $agentUuid;
    /**
     * A human friendly name to identify the key
     *
     * @var string
     */
    protected $name;
    /**
     * Agent id
     *
     * @return string
     */
    public function getAgentUuid(): string
    {
        return $this->agentUuid;
    }
    /**
     * Agent id
     *
     * @param string $agentUuid
     *
     * @return self
     */
    public function setAgentUuid(string $agentUuid): self
    {
        $this->initialized['agentUuid'] = true;
        $this->agentUuid = $agentUuid;
        return $this;
    }
    /**
     * A human friendly name to identify the key
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human friendly name to identify the key
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
}