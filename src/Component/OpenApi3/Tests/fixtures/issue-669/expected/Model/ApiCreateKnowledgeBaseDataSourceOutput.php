<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateKnowledgeBaseDataSourceOutput implements AdditionalPropertiesInterface
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
     * Data Source configuration for Knowledge Bases
     *
     * @var ApiKnowledgeBaseDataSource
     */
    protected $knowledgeBaseDataSource;
    /**
     * Data Source configuration for Knowledge Bases
     *
     * @return ApiKnowledgeBaseDataSource
     */
    public function getKnowledgeBaseDataSource(): ApiKnowledgeBaseDataSource
    {
        return $this->knowledgeBaseDataSource;
    }
    /**
     * Data Source configuration for Knowledge Bases
     *
     * @param ApiKnowledgeBaseDataSource $knowledgeBaseDataSource
     *
     * @return self
     */
    public function setKnowledgeBaseDataSource(ApiKnowledgeBaseDataSource $knowledgeBaseDataSource): self
    {
        $this->initialized['knowledgeBaseDataSource'] = true;
        $this->knowledgeBaseDataSource = $knowledgeBaseDataSource;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['knowledgeBaseDataSource' => ['knowledge_base_data_source', 'getKnowledgeBaseDataSource', 'setKnowledgeBaseDataSource']];
    }
}