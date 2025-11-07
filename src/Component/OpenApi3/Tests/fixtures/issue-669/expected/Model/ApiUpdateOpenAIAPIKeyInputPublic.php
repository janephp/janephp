<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateOpenAIAPIKeyInputPublic extends \ArrayObject
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
     * OpenAI API key
     *
     * @var string
     */
    protected $apiKey;
    /**
     * API key ID
     *
     * @var string
     */
    protected $apiKeyUuid;
    /**
     * Name of the key
     *
     * @var string
     */
    protected $name;
    /**
     * OpenAI API key
     *
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }
    /**
     * OpenAI API key
     *
     * @param string $apiKey
     *
     * @return self
     */
    public function setApiKey(string $apiKey): self
    {
        $this->initialized['apiKey'] = true;
        $this->apiKey = $apiKey;
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
     * Name of the key
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the key
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