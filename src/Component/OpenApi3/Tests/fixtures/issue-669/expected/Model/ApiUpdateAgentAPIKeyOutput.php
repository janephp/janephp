<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateAgentAPIKeyOutput extends \ArrayObject
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
     * Agent API Key Info
     *
     * @var ApiAgentAPIKeyInfo
     */
    protected $apiKeyInfo;
    /**
     * Agent API Key Info
     *
     * @return ApiAgentAPIKeyInfo
     */
    public function getApiKeyInfo(): ApiAgentAPIKeyInfo
    {
        return $this->apiKeyInfo;
    }
    /**
     * Agent API Key Info
     *
     * @param ApiAgentAPIKeyInfo $apiKeyInfo
     *
     * @return self
     */
    public function setApiKeyInfo(ApiAgentAPIKeyInfo $apiKeyInfo): self
    {
        $this->initialized['apiKeyInfo'] = true;
        $this->apiKeyInfo = $apiKeyInfo;
        return $this;
    }
}