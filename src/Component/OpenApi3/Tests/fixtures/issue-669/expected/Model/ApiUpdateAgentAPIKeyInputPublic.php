<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateAgentAPIKeyInputPublic extends \ArrayObject
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
     * API key ID
     *
     * @var string
     */
    protected $apiKeyUuid;
    /**
     * Name
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
     * API key ID
     *
     * @return string
     */
    public function getApiKeyUuid(): string
    {
        return $this->apiKeyUuid;
    }
    /**
     * API key ID
     *
     * @param string $apiKeyUuid
     *
     * @return self
     */
    public function setApiKeyUuid(string $apiKeyUuid): self
    {
        $this->initialized['apiKeyUuid'] = true;
        $this->apiKeyUuid = $apiKeyUuid;
        return $this;
    }
    /**
     * Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name
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