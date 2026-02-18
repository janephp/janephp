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