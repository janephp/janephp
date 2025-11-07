<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiCreateKnowledgeBaseDataSourceInputPublic extends \ArrayObject
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
     * Knowledge base id
     *
     * @var string
     */
    protected $knowledgeBaseUuid;
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
     * Knowledge base id
     *
     * @return string
     */
    public function getKnowledgeBaseUuid(): string
    {
        return $this->knowledgeBaseUuid;
    }
    /**
     * Knowledge base id
     *
     * @param string $knowledgeBaseUuid
     *
     * @return self
     */
    public function setKnowledgeBaseUuid(string $knowledgeBaseUuid): self
    {
        $this->initialized['knowledgeBaseUuid'] = true;
        $this->knowledgeBaseUuid = $knowledgeBaseUuid;
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