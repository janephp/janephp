<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateKnowledgeBaseInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The id of the DigitalOcean database this knowledge base will use, optiona.
     *
     * @var string
     */
    public string $databaseId;
    /**
     * Identifier for the foundation model.
     *
     * @var string
     */
    public string $embeddingModelUuid;
    /**
     * Knowledge base name
     *
     * @var string
     */
    public string $name;
    /**
     * The id of the DigitalOcean project this knowledge base will belong to
     *
     * @var string
     */
    public string $projectId;
    /**
     * Tags to organize your knowledge base.
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * Knowledge base id
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['databaseId' => 'database_id', 'embeddingModelUuid' => 'embedding_model_uuid', 'name' => 'name', 'projectId' => 'project_id', 'tags' => 'tags', 'uuid' => 'uuid'];
    }
}