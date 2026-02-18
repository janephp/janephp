<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiKBDataSource extends \ArrayObject
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
     * AWS S3 Data Source
     *
     * @var ApiAWSDataSource
     */
    protected $awsDataSource;
    /**
     * Deprecated, moved to data_source_details
     *
     * @var string
     */
    protected $bucketName;
    /**
     * Deprecated, moved to data_source_details
     *
     * @var string
     */
    protected $bucketRegion;
    /**
     * The chunking algorithm to use for processing data sources.
     * 
     * **Note: This feature requires enabling the knowledgebase enhancements feature preview flag.**
     *
     * @var string
     */
    protected $chunkingAlgorithm = 'CHUNKING_ALGORITHM_SECTION_BASED';
    /**
     * Configuration options for the chunking algorithm.
     * 
     * **Note: This feature requires enabling the knowledgebase enhancements feature preview flag.**
     *
     * @var ApiChunkingOptions
     */
    protected $chunkingOptions;
    /**
     * Dropbox Data Source
     *
     * @var ApiDropboxDataSource
     */
    protected $dropboxDataSource;
    /**
     * File to upload as data source for knowledge base.
     *
     * @var ApiFileUploadDataSource
     */
    protected $fileUploadDataSource;
    /**
     * Google Drive Data Source
     *
     * @var ApiGoogleDriveDataSource
     */
    protected $googleDriveDataSource;
    /**
     * @var string
     */
    protected $itemPath;
    /**
     * Spaces Bucket Data Source
     *
     * @var ApiSpacesDataSource
     */
    protected $spacesDataSource;
    /**
     * WebCrawlerDataSource
     *
     * @var ApiWebCrawlerDataSource
     */
    protected $webCrawlerDataSource;
    /**
     * AWS S3 Data Source
     *
     * @return ApiAWSDataSource
     */
    public function getAwsDataSource(): ApiAWSDataSource
    {
        return $this->awsDataSource;
    }
    /**
     * AWS S3 Data Source
     *
     * @param ApiAWSDataSource $awsDataSource
     *
     * @return self
     */
    public function setAwsDataSource(ApiAWSDataSource $awsDataSource): self
    {
        $this->initialized['awsDataSource'] = true;
        $this->awsDataSource = $awsDataSource;
        return $this;
    }
    /**
     * Deprecated, moved to data_source_details
     *
     * @return string
     */
    public function getBucketName(): string
    {
        return $this->bucketName;
    }
    /**
     * Deprecated, moved to data_source_details
     *
     * @param string $bucketName
     *
     * @return self
     */
    public function setBucketName(string $bucketName): self
    {
        $this->initialized['bucketName'] = true;
        $this->bucketName = $bucketName;
        return $this;
    }
    /**
     * Deprecated, moved to data_source_details
     *
     * @return string
     */
    public function getBucketRegion(): string
    {
        return $this->bucketRegion;
    }
    /**
     * Deprecated, moved to data_source_details
     *
     * @param string $bucketRegion
     *
     * @return self
     */
    public function setBucketRegion(string $bucketRegion): self
    {
        $this->initialized['bucketRegion'] = true;
        $this->bucketRegion = $bucketRegion;
        return $this;
    }
    /**
     * The chunking algorithm to use for processing data sources.
     * 
     * **Note: This feature requires enabling the knowledgebase enhancements feature preview flag.**
     *
     * @return string
     */
    public function getChunkingAlgorithm(): string
    {
        return $this->chunkingAlgorithm;
    }
    /**
     * The chunking algorithm to use for processing data sources.
     **Note: This feature requires enabling the knowledgebase enhancements feature preview flag.**
     *
     * @param string $chunkingAlgorithm
     *
     * @return self
     */
    public function setChunkingAlgorithm(string $chunkingAlgorithm): self
    {
        $this->initialized['chunkingAlgorithm'] = true;
        $this->chunkingAlgorithm = $chunkingAlgorithm;
        return $this;
    }
    /**
     * Configuration options for the chunking algorithm.
     * 
     * **Note: This feature requires enabling the knowledgebase enhancements feature preview flag.**
     *
     * @return ApiChunkingOptions
     */
    public function getChunkingOptions(): ApiChunkingOptions
    {
        return $this->chunkingOptions;
    }
    /**
     * Configuration options for the chunking algorithm.
     **Note: This feature requires enabling the knowledgebase enhancements feature preview flag.**
     *
     * @param ApiChunkingOptions $chunkingOptions
     *
     * @return self
     */
    public function setChunkingOptions(ApiChunkingOptions $chunkingOptions): self
    {
        $this->initialized['chunkingOptions'] = true;
        $this->chunkingOptions = $chunkingOptions;
        return $this;
    }
    /**
     * Dropbox Data Source
     *
     * @return ApiDropboxDataSource
     */
    public function getDropboxDataSource(): ApiDropboxDataSource
    {
        return $this->dropboxDataSource;
    }
    /**
     * Dropbox Data Source
     *
     * @param ApiDropboxDataSource $dropboxDataSource
     *
     * @return self
     */
    public function setDropboxDataSource(ApiDropboxDataSource $dropboxDataSource): self
    {
        $this->initialized['dropboxDataSource'] = true;
        $this->dropboxDataSource = $dropboxDataSource;
        return $this;
    }
    /**
     * File to upload as data source for knowledge base.
     *
     * @return ApiFileUploadDataSource
     */
    public function getFileUploadDataSource(): ApiFileUploadDataSource
    {
        return $this->fileUploadDataSource;
    }
    /**
     * File to upload as data source for knowledge base.
     *
     * @param ApiFileUploadDataSource $fileUploadDataSource
     *
     * @return self
     */
    public function setFileUploadDataSource(ApiFileUploadDataSource $fileUploadDataSource): self
    {
        $this->initialized['fileUploadDataSource'] = true;
        $this->fileUploadDataSource = $fileUploadDataSource;
        return $this;
    }
    /**
     * Google Drive Data Source
     *
     * @return ApiGoogleDriveDataSource
     */
    public function getGoogleDriveDataSource(): ApiGoogleDriveDataSource
    {
        return $this->googleDriveDataSource;
    }
    /**
     * Google Drive Data Source
     *
     * @param ApiGoogleDriveDataSource $googleDriveDataSource
     *
     * @return self
     */
    public function setGoogleDriveDataSource(ApiGoogleDriveDataSource $googleDriveDataSource): self
    {
        $this->initialized['googleDriveDataSource'] = true;
        $this->googleDriveDataSource = $googleDriveDataSource;
        return $this;
    }
    /**
     * @return string
     */
    public function getItemPath(): string
    {
        return $this->itemPath;
    }
    /**
     * @param string $itemPath
     *
     * @return self
     */
    public function setItemPath(string $itemPath): self
    {
        $this->initialized['itemPath'] = true;
        $this->itemPath = $itemPath;
        return $this;
    }
    /**
     * Spaces Bucket Data Source
     *
     * @return ApiSpacesDataSource
     */
    public function getSpacesDataSource(): ApiSpacesDataSource
    {
        return $this->spacesDataSource;
    }
    /**
     * Spaces Bucket Data Source
     *
     * @param ApiSpacesDataSource $spacesDataSource
     *
     * @return self
     */
    public function setSpacesDataSource(ApiSpacesDataSource $spacesDataSource): self
    {
        $this->initialized['spacesDataSource'] = true;
        $this->spacesDataSource = $spacesDataSource;
        return $this;
    }
    /**
     * WebCrawlerDataSource
     *
     * @return ApiWebCrawlerDataSource
     */
    public function getWebCrawlerDataSource(): ApiWebCrawlerDataSource
    {
        return $this->webCrawlerDataSource;
    }
    /**
     * WebCrawlerDataSource
     *
     * @param ApiWebCrawlerDataSource $webCrawlerDataSource
     *
     * @return self
     */
    public function setWebCrawlerDataSource(ApiWebCrawlerDataSource $webCrawlerDataSource): self
    {
        $this->initialized['webCrawlerDataSource'] = true;
        $this->webCrawlerDataSource = $webCrawlerDataSource;
        return $this;
    }
}