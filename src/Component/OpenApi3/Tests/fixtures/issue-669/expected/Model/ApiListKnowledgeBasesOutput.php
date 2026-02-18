<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiListKnowledgeBasesOutput extends \ArrayObject
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
     * The knowledge bases
     *
     * @var list<ApiKnowledgeBase>
     */
    protected $knowledgeBases;
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
     * The knowledge bases
     *
     * @return list<ApiKnowledgeBase>
     */
    public function getKnowledgeBases(): array
    {
        return $this->knowledgeBases;
    }
    /**
     * The knowledge bases
     *
     * @param list<ApiKnowledgeBase> $knowledgeBases
     *
     * @return self
     */
    public function setKnowledgeBases(array $knowledgeBases): self
    {
        $this->initialized['knowledgeBases'] = true;
        $this->knowledgeBases = $knowledgeBases;
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