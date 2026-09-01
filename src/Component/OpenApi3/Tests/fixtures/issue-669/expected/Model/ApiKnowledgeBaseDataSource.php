<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiKnowledgeBaseDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * AWS S3 Data Source for Display
     *
     * @var ApiAWSDataSourceDisplay
     */
    public ApiAWSDataSourceDisplay $awsDataSource;
    /**
     * Name of storage bucket - Deprecated, moved to data_source_details
     *
     * @var string
     */
    public string $bucketName;
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
     * Creation date / time
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Dropbox Data Source for Display
     *
     * @var ApiDropboxDataSourceDisplay
     */
    public ApiDropboxDataSourceDisplay $dropboxDataSource;
    /**
     * File to upload as data source for knowledge base.
     *
     * @var ApiFileUploadDataSource
     */
    public ApiFileUploadDataSource $fileUploadDataSource;
    /**
     * Google Drive Data Source for Display
     *
     * @var ApiGoogleDriveDataSourceDisplay
     */
    public ApiGoogleDriveDataSourceDisplay $googleDriveDataSource;
    /**
     * Path of folder or object in bucket - Deprecated, moved to data_source_details
     *
     * @var string
     */
    public string $itemPath;
    /**
     * @var ApiIndexedDataSource
     */
    public ApiIndexedDataSource $lastDatasourceIndexingJob;
    /**
     * Region code - Deprecated, moved to data_source_details
     *
     * @var string
     */
    public string $region;
    /**
     * Spaces Bucket Data Source
     *
     * @var ApiSpacesDataSource
     */
    public ApiSpacesDataSource $spacesDataSource;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Unique id of knowledge base
     *
     * @var string
     */
    public string $uuid;
    /**
     * WebCrawlerDataSource
     *
     * @var ApiWebCrawlerDataSource
     */
    public ApiWebCrawlerDataSource $webCrawlerDataSource;
    public function definedProperties(): array
    {
        return ['awsDataSource' => 'aws_data_source', 'bucketName' => 'bucket_name', 'chunkingAlgorithm' => 'chunking_algorithm', 'chunkingOptions' => 'chunking_options', 'createdAt' => 'created_at', 'dropboxDataSource' => 'dropbox_data_source', 'fileUploadDataSource' => 'file_upload_data_source', 'googleDriveDataSource' => 'google_drive_data_source', 'itemPath' => 'item_path', 'lastDatasourceIndexingJob' => 'last_datasource_indexing_job', 'region' => 'region', 'spacesDataSource' => 'spaces_data_source', 'updatedAt' => 'updated_at', 'uuid' => 'uuid', 'webCrawlerDataSource' => 'web_crawler_data_source'];
    }
}