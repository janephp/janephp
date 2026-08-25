<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetAnthropicAPIKeyOutput implements AdditionalPropertiesInterface
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
     * Anthropic API Key Info
     *
     * @var ApiAnthropicAPIKeyInfo
     */
    protected $apiKeyInfo;
    /**
     * Anthropic API Key Info
     *
     * @return ApiAnthropicAPIKeyInfo
     */
    public function getApiKeyInfo(): ApiAnthropicAPIKeyInfo
    {
        return $this->apiKeyInfo;
    }
    /**
     * Anthropic API Key Info
     *
     * @param ApiAnthropicAPIKeyInfo $apiKeyInfo
     *
     * @return self
     */
    public function setApiKeyInfo(ApiAnthropicAPIKeyInfo $apiKeyInfo): self
    {
        $this->initialized['apiKeyInfo'] = true;
        $this->apiKeyInfo = $apiKeyInfo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['apiKeyInfo' => ['api_key_info', 'getApiKeyInfo', 'setApiKeyInfo']];
    }
}