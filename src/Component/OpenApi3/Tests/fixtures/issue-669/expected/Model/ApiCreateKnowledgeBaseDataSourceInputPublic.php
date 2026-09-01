<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateKnowledgeBaseDataSourceInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * AWS S3 Data Source
     *
     * @var ApiAWSDataSource
     */
    public ApiAWSDataSource $awsDataSource;
    /**
     * The chunking algorithm to use for processing data sources.
     * 
     * **Note: This feature requires enabling the knowledgebase enhancements feature preview flag.**
     *
     * @var string
     */
    public string $chunkingAlgorithm = 'CHUNKING_ALGORITHM_SECTION_BASED';
    /**
     * Configuration options for the chunking algorithm.
     * 
     * **Note: This feature requires enabling the knowledgebase enhancements feature preview flag.**
     *
     * @var ApiChunkingOptions
     */
    public ApiChunkingOptions $chunkingOptions;
    /**
     * Knowledge base id
     *
     * @var string
     */
    public string $knowledgeBaseUuid;
    /**
     * Spaces Bucket Data Source
     *
     * @var ApiSpacesDataSource
     */
    public ApiSpacesDataSource $spacesDataSource;
    /**
     * WebCrawlerDataSource
     *
     * @var ApiWebCrawlerDataSource
     */
    public ApiWebCrawlerDataSource $webCrawlerDataSource;
    public function definedProperties(): array
    {
        return ['awsDataSource' => 'aws_data_source', 'chunkingAlgorithm' => 'chunking_algorithm', 'chunkingOptions' => 'chunking_options', 'knowledgeBaseUuid' => 'knowledge_base_uuid', 'spacesDataSource' => 'spaces_data_source', 'webCrawlerDataSource' => 'web_crawler_data_source'];
    }
}