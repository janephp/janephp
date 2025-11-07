<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateModelAPIKeyOutput extends \ArrayObject
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
}