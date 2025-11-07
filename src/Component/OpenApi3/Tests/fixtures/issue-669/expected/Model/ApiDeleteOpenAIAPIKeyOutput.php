<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiDeleteOpenAIAPIKeyOutput extends \ArrayObject
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
     * OpenAI API Key Info
     *
     * @var ApiOpenAIAPIKeyInfo
     */
    protected $apiKeyInfo;
    /**
     * OpenAI API Key Info
     *
     * @return ApiOpenAIAPIKeyInfo
     */
    public function getApiKeyInfo(): ApiOpenAIAPIKeyInfo
    {
        return $this->apiKeyInfo;
    }
    /**
     * OpenAI API Key Info
     *
     * @param ApiOpenAIAPIKeyInfo $apiKeyInfo
     *
     * @return self
     */
    public function setApiKeyInfo(ApiOpenAIAPIKeyInfo $apiKeyInfo): self
    {
        $this->initialized['apiKeyInfo'] = true;
        $this->apiKeyInfo = $apiKeyInfo;
        return $this;
    }
}