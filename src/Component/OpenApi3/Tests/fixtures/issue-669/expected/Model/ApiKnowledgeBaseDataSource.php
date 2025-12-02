<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiKnowledgeBaseDataSource extends \ArrayObject
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
     * AWS S3 Data Source for Display
     *
     * @var ApiAWSDataSourceDisplay
     */
    protected $awsDataSource;
    /**
     * Name of storage bucket - Deprecated, moved to data_source_details
     *
     * @var string
     */
    protected $bucketName;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Dropbox Data Source for Display
     *
     * @var ApiDropboxDataSourceDisplay
     */
    protected $dropboxDataSource;
    /**
     * File to upload as data source for knowledge base.
     *
     * @var ApiFileUploadDataSource
     */
    protected $fileUploadDataSource;
    /**
     * Google Drive Data Source for Display
     *
     * @var ApiGoogleDriveDataSourceDisplay
     */
    protected $googleDriveDataSource;
    /**
     * Path of folder or object in bucket - Deprecated, moved to data_source_details
     *
     * @var string
     */
    protected $itemPath;
    /**
     * @var ApiIndexedDataSource
     */
    protected $lastDatasourceIndexingJob;
    /**
     * Region code - Deprecated, moved to data_source_details
     *
     * @var string
     */
    protected $region;
    /**
     * Spaces Bucket Data Source
     *
     * @var ApiSpacesDataSource
     */
    protected $spacesDataSource;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique id of knowledge base
     *
     * @var string
     */
    protected $uuid;
    /**
     * WebCrawlerDataSource
     *
     * @var ApiWebCrawlerDataSource
     */
    protected $webCrawlerDataSource;
    /**
     * AWS S3 Data Source for Display
     *
     * @return ApiAWSDataSourceDisplay
     */
    public function getAwsDataSource(): ApiAWSDataSourceDisplay
    {
        return $this->awsDataSource;
    }
    /**
     * AWS S3 Data Source for Display
     *
     * @param ApiAWSDataSourceDisplay $awsDataSource
     *
     * @return self
     */
    public function setAwsDataSource(ApiAWSDataSourceDisplay $awsDataSource): self
    {
        $this->initialized['awsDataSource'] = true;
        $this->awsDataSource = $awsDataSource;
        return $this;
    }
    /**
     * Name of storage bucket - Deprecated, moved to data_source_details
     *
     * @return string
     */
    public function getBucketName(): string
    {
        return $this->bucketName;
    }
    /**
     * Name of storage bucket - Deprecated, moved to data_source_details
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
     * Creation date / time
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date / time
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Dropbox Data Source for Display
     *
     * @return ApiDropboxDataSourceDisplay
     */
    public function getDropboxDataSource(): ApiDropboxDataSourceDisplay
    {
        return $this->dropboxDataSource;
    }
    /**
     * Dropbox Data Source for Display
     *
     * @param ApiDropboxDataSourceDisplay $dropboxDataSource
     *
     * @return self
     */
    public function setDropboxDataSource(ApiDropboxDataSourceDisplay $dropboxDataSource): self
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
     * Google Drive Data Source for Display
     *
     * @return ApiGoogleDriveDataSourceDisplay
     */
    public function getGoogleDriveDataSource(): ApiGoogleDriveDataSourceDisplay
    {
        return $this->googleDriveDataSource;
    }
    /**
     * Google Drive Data Source for Display
     *
     * @param ApiGoogleDriveDataSourceDisplay $googleDriveDataSource
     *
     * @return self
     */
    public function setGoogleDriveDataSource(ApiGoogleDriveDataSourceDisplay $googleDriveDataSource): self
    {
        $this->initialized['googleDriveDataSource'] = true;
        $this->googleDriveDataSource = $googleDriveDataSource;
        return $this;
    }
    /**
     * Path of folder or object in bucket - Deprecated, moved to data_source_details
     *
     * @return string
     */
    public function getItemPath(): string
    {
        return $this->itemPath;
    }
    /**
     * Path of folder or object in bucket - Deprecated, moved to data_source_details
     *
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
     * @return ApiIndexedDataSource
     */
    public function getLastDatasourceIndexingJob(): ApiIndexedDataSource
    {
        return $this->lastDatasourceIndexingJob;
    }
    /**
     * @param ApiIndexedDataSource $lastDatasourceIndexingJob
     *
     * @return self
     */
    public function setLastDatasourceIndexingJob(ApiIndexedDataSource $lastDatasourceIndexingJob): self
    {
        $this->initialized['lastDatasourceIndexingJob'] = true;
        $this->lastDatasourceIndexingJob = $lastDatasourceIndexingJob;
        return $this;
    }
    /**
     * Region code - Deprecated, moved to data_source_details
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region code - Deprecated, moved to data_source_details
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
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
     * Last modified
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last modified
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Unique id of knowledge base
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id of knowledge base
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
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