<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDeleteModelAPIKeyOutput implements AdditionalPropertiesInterface
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
     * Model API Key Info
     *
     * @var ApiModelAPIKeyInfo
     */
    protected $apiKeyInfo;
    /**
     * Model API Key Info
     *
     * @return ApiModelAPIKeyInfo
     */
    public function getApiKeyInfo(): ApiModelAPIKeyInfo
    {
        return $this->apiKeyInfo;
    }
    /**
     * Model API Key Info
     *
     * @param ApiModelAPIKeyInfo $apiKeyInfo
     *
     * @return self
     */
    public function setApiKeyInfo(ApiModelAPIKeyInfo $apiKeyInfo): self
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