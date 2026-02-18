<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiCreateKnowledgeBaseInputPublic extends \ArrayObject
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
     * Identifier of the DigitalOcean OpenSearch database this knowledge base will use, optional.
     * If not provided, we create a new database for the knowledge base in
     * the same region as the knowledge base.
     *
     * @var string
     */
    protected $databaseId;
    /**
     * The data sources to use for this knowledge base. See [Organize Data Sources](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#spaces-buckets) for more information on data sources best practices.
     *
     * @var list<ApiKBDataSource>
     */
    protected $datasources;
    /**
     * Identifier for the [embedding model](https://docs.digitalocean.com/products/genai-platform/details/models/#embedding-models).
     *
     * @var string
     */
    protected $embeddingModelUuid;
    /**
     * Name of the knowledge base.
     *
     * @var string
     */
    protected $name;
    /**
     * Identifier of the DigitalOcean project this knowledge base will belong to.
     *
     * @var string
     */
    protected $projectId;
    /**
     * The datacenter region to deploy the knowledge base in.
     *
     * @var string
     */
    protected $region;
    /**
     * Tags to organize your knowledge base.
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * The VPC to deploy the knowledge base database in
     *
     * @var string
     */
    protected $vpcUuid;
    /**
     * Identifier of the DigitalOcean OpenSearch database this knowledge base will use, optional.
     * If not provided, we create a new database for the knowledge base in
     * the same region as the knowledge base.
     *
     * @return string
     */
    public function getDatabaseId(): string
    {
        return $this->databaseId;
    }
    /**
    * Identifier of the DigitalOcean OpenSearch database this knowledge base will use, optional.
    If not provided, we create a new database for the knowledge base in
    the same region as the knowledge base.
    *
    * @param string $databaseId
    *
    * @return self
    */
    public function setDatabaseId(string $databaseId): self
    {
        $this->initialized['databaseId'] = true;
        $this->databaseId = $databaseId;
        return $this;
    }
    /**
     * The data sources to use for this knowledge base. See [Organize Data Sources](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#spaces-buckets) for more information on data sources best practices.
     *
     * @return list<ApiKBDataSource>
     */
    public function getDatasources(): array
    {
        return $this->datasources;
    }
    /**
     * The data sources to use for this knowledge base. See [Organize Data Sources](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#spaces-buckets) for more information on data sources best practices.
     *
     * @param list<ApiKBDataSource> $datasources
     *
     * @return self
     */
    public function setDatasources(array $datasources): self
    {
        $this->initialized['datasources'] = true;
        $this->datasources = $datasources;
        return $this;
    }
    /**
     * Identifier for the [embedding model](https://docs.digitalocean.com/products/genai-platform/details/models/#embedding-models).
     *
     * @return string
     */
    public function getEmbeddingModelUuid(): string
    {
        return $this->embeddingModelUuid;
    }
    /**
     * Identifier for the [embedding model](https://docs.digitalocean.com/products/genai-platform/details/models/#embedding-models).
     *
     * @param string $embeddingModelUuid
     *
     * @return self
     */
    public function setEmbeddingModelUuid(string $embeddingModelUuid): self
    {
        $this->initialized['embeddingModelUuid'] = true;
        $this->embeddingModelUuid = $embeddingModelUuid;
        return $this;
    }
    /**
     * Name of the knowledge base.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the knowledge base.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Identifier of the DigitalOcean project this knowledge base will belong to.
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * Identifier of the DigitalOcean project this knowledge base will belong to.
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The datacenter region to deploy the knowledge base in.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The datacenter region to deploy the knowledge base in.
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
     * Tags to organize your knowledge base.
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * Tags to organize your knowledge base.
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * The VPC to deploy the knowledge base database in
     *
     * @return string
     */
    public function getVpcUuid(): string
    {
        return $this->vpcUuid;
    }
    /**
     * The VPC to deploy the knowledge base database in
     *
     * @param string $vpcUuid
     *
     * @return self
     */
    public function setVpcUuid(string $vpcUuid): self
    {
        $this->initialized['vpcUuid'] = true;
        $this->vpcUuid = $vpcUuid;
        return $this;
    }
}