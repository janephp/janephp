<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiKBDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * AWS S3 Data Source
     *
     * @var ApiAWSDataSource
     */
    public ApiAWSDataSource $awsDataSource;
    /**
     * Deprecated, moved to data_source_details
     *
     * @var string
     */
    public string $bucketName;
    /**
     * Deprecated, moved to data_source_details
     *
     * @var string
     */
    public string $bucketRegion;
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
     * Dropbox Data Source
     *
     * @var ApiDropboxDataSource
     */
    public ApiDropboxDataSource $dropboxDataSource;
    /**
     * File to upload as data source for knowledge base.
     *
     * @var ApiFileUploadDataSource
     */
    public ApiFileUploadDataSource $fileUploadDataSource;
    /**
     * Google Drive Data Source
     *
     * @var ApiGoogleDriveDataSource
     */
    public ApiGoogleDriveDataSource $googleDriveDataSource;
    /**
     * @var string
     */
    public string $itemPath;
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
        return ['awsDataSource' => 'aws_data_source', 'bucketName' => 'bucket_name', 'bucketRegion' => 'bucket_region', 'chunkingAlgorithm' => 'chunking_algorithm', 'chunkingOptions' => 'chunking_options', 'dropboxDataSource' => 'dropbox_data_source', 'fileUploadDataSource' => 'file_upload_data_source', 'googleDriveDataSource' => 'google_drive_data_source', 'itemPath' => 'item_path', 'spacesDataSource' => 'spaces_data_source', 'webCrawlerDataSource' => 'web_crawler_data_source'];
    }
}