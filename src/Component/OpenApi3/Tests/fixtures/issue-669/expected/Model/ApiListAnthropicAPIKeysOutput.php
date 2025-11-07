<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiListAnthropicAPIKeysOutput extends \ArrayObject
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
     * Api key infos
     *
     * @var list<ApiAnthropicAPIKeyInfo>
     */
    protected $apiKeyInfos;
    /**
     * Links to other pages
     *
     * @var ApiLinks
     */
    protected $links;
    /**
     * Meta information about the data set
     *
     * @var ApiMeta
     */
    protected $meta;
    /**
     * Api key infos
     *
     * @return list<ApiAnthropicAPIKeyInfo>
     */
    public function getApiKeyInfos(): array
    {
        return $this->apiKeyInfos;
    }
    /**
     * Api key infos
     *
     * @param list<ApiAnthropicAPIKeyInfo> $apiKeyInfos
     *
     * @return self
     */
    public function setApiKeyInfos(array $apiKeyInfos): self
    {
        $this->initialized['apiKeyInfos'] = true;
        $this->apiKeyInfos = $apiKeyInfos;
        return $this;
    }
    /**
     * Links to other pages
     *
     * @return ApiLinks
     */
    public function getLinks(): ApiLinks
    {
        return $this->links;
    }
    /**
     * Links to other pages
     *
     * @param ApiLinks $links
     *
     * @return self
     */
    public function setLinks(ApiLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * Meta information about the data set
     *
     * @return ApiMeta
     */
    public function getMeta(): ApiMeta
    {
        return $this->meta;
    }
    /**
     * Meta information about the data set
     *
     * @param ApiMeta $meta
     *
     * @return self
     */
    public function setMeta(ApiMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}