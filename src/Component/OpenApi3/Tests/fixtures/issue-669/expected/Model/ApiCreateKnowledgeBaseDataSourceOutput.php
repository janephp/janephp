<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateKnowledgeBaseDataSourceOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Data Source configuration for Knowledge Bases
     *
     * @var ApiKnowledgeBaseDataSource
     */
    public ApiKnowledgeBaseDataSource $knowledgeBaseDataSource;
    public function definedProperties(): array
    {
        return ['knowledgeBaseDataSource' => 'knowledge_base_data_source'];
    }
}