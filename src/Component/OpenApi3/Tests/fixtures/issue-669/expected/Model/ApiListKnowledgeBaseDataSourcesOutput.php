<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiListKnowledgeBaseDataSourcesOutput extends \ArrayObject
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
     * The data sources
     *
     * @var list<ApiKnowledgeBaseDataSource>
     */
    protected $knowledgeBaseDataSources;
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
     * The data sources
     *
     * @return list<ApiKnowledgeBaseDataSource>
     */
    public function getKnowledgeBaseDataSources(): array
    {
        return $this->knowledgeBaseDataSources;
    }
    /**
     * The data sources
     *
     * @param list<ApiKnowledgeBaseDataSource> $knowledgeBaseDataSources
     *
     * @return self
     */
    public function setKnowledgeBaseDataSources(array $knowledgeBaseDataSources): self
    {
        $this->initialized['knowledgeBaseDataSources'] = true;
        $this->knowledgeBaseDataSources = $knowledgeBaseDataSources;
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