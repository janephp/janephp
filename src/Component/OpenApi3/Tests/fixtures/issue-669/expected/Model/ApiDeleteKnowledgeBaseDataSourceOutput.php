<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDeleteKnowledgeBaseDataSourceOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Data source id
     *
     * @var string
     */
    public string $dataSourceUuid;
    /**
     * Knowledge base id
     *
     * @var string
     */
    public string $knowledgeBaseUuid;
    public function definedProperties(): array
    {
        return ['dataSourceUuid' => 'data_source_uuid', 'knowledgeBaseUuid' => 'knowledge_base_uuid'];
    }
}