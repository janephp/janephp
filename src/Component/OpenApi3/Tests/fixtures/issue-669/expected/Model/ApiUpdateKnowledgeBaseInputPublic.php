<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateKnowledgeBaseInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The id of the DigitalOcean database this knowledge base will use, optiona.
     *
     * @var string
     */
    protected $databaseId;
    /**
     * Identifier for the foundation model.
     *
     * @var string
     */
    protected $embeddingModelUuid;
    /**
     * Knowledge base name
     *
     * @var string
     */
    protected $name;
    /**
     * The id of the DigitalOcean project this knowledge base will belong to
     *
     * @var string
     */
    protected $projectId;
    /**
     * Tags to organize your knowledge base.
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * Knowledge base id
     *
     * @var string
     */
    protected $uuid;
    /**
     * The id of the DigitalOcean database this knowledge base will use, optiona.
     *
     * @return string
     */
    public function getDatabaseId(): string
    {
        return $this->databaseId;
    }
    /**
     * The id of the DigitalOcean database this knowledge base will use, optiona.
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
     * Identifier for the foundation model.
     *
     * @return string
     */
    public function getEmbeddingModelUuid(): string
    {
        return $this->embeddingModelUuid;
    }
    /**
     * Identifier for the foundation model.
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
     * Knowledge base name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Knowledge base name
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
     * The id of the DigitalOcean project this knowledge base will belong to
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The id of the DigitalOcean project this knowledge base will belong to
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
     * Knowledge base id
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Knowledge base id
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
    public function definedProperties(): array
    {
        return ['databaseId' => ['database_id', 'getDatabaseId', 'setDatabaseId'], 'embeddingModelUuid' => ['embedding_model_uuid', 'getEmbeddingModelUuid', 'setEmbeddingModelUuid'], 'name' => ['name', 'getName', 'setName'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId'], 'tags' => ['tags', 'getTags', 'setTags'], 'uuid' => ['uuid', 'getUuid', 'setUuid']];
    }
}