<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListKnowledgeBaseDataSourcesOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The data sources
     *
     * @var list<ApiKnowledgeBaseDataSource>
     */
    public array $knowledgeBaseDataSources;
    /**
     * Links to other pages
     *
     * @var ApiLinks
     */
    public ApiLinks $links;
    /**
     * Meta information about the data set
     *
     * @var ApiMeta
     */
    public ApiMeta $meta;
    public function definedProperties(): array
    {
        return ['knowledgeBaseDataSources' => 'knowledge_base_data_sources', 'links' => 'links', 'meta' => 'meta'];
    }
}