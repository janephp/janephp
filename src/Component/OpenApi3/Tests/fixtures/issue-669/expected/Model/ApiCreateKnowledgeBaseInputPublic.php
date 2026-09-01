<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateKnowledgeBaseInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Identifier of the DigitalOcean OpenSearch database this knowledge base will use, optional.
     * If not provided, we create a new database for the knowledge base in
     * the same region as the knowledge base.
     *
     * @var string
     */
    public string $databaseId;
    /**
     * The data sources to use for this knowledge base. See [Organize Data Sources](https://docs.digitalocean.com/products/genai-platform/concepts/best-practices/#spaces-buckets) for more information on data sources best practices.
     *
     * @var list<ApiKBDataSource>
     */
    public array $datasources;
    /**
     * Identifier for the [embedding model](https://docs.digitalocean.com/products/genai-platform/details/models/#embedding-models).
     *
     * @var string
     */
    public string $embeddingModelUuid;
    /**
     * Name of the knowledge base.
     *
     * @var string
     */
    public string $name;
    /**
     * Identifier of the DigitalOcean project this knowledge base will belong to.
     *
     * @var string
     */
    public string $projectId;
    /**
     * The datacenter region to deploy the knowledge base in.
     *
     * @var string
     */
    public string $region;
    /**
     * Tags to organize your knowledge base.
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * The VPC to deploy the knowledge base database in
     *
     * @var string
     */
    public string $vpcUuid;
    public function definedProperties(): array
    {
        return ['databaseId' => 'database_id', 'datasources' => 'datasources', 'embeddingModelUuid' => 'embedding_model_uuid', 'name' => 'name', 'projectId' => 'project_id', 'region' => 'region', 'tags' => 'tags', 'vpcUuid' => 'vpc_uuid'];
    }
}