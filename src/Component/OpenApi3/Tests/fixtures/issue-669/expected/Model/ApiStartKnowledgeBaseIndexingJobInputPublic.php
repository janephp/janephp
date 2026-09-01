<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiStartKnowledgeBaseIndexingJobInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * List of data source ids to index, if none are provided, all data sources will be indexed
     *
     * @var list<string>
     */
    public array $dataSourceUuids;
    /**
     * Knowledge base id
     *
     * @var string
     */
    public string $knowledgeBaseUuid;
    public function definedProperties(): array
    {
        return ['dataSourceUuids' => 'data_source_uuids', 'knowledgeBaseUuid' => 'knowledge_base_uuid'];
    }
}