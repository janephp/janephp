<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiKnowledgeBase implements AdditionalPropertiesInterface
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
     * Time when the knowledge base was added to the agent
     *
     * @var \DateTime
     */
    protected $addedToAgentAt;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $databaseId;
    /**
     * @var string
     */
    protected $embeddingModelUuid;
    /**
     * Whether the knowledge base is public or not
     *
     * @var bool
     */
    protected $isPublic;
    /**
     * IndexingJob description
     *
     * @var ApiIndexingJob
     */
    protected $lastIndexingJob;
    /**
     * Name of knowledge base
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $projectId;
    /**
     * Region code
     *
     * @var string
     */
    protected $region;
    /**
     * Tags to organize related resources
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Id of user that created the knowledge base
     *
     * @var string
     */
    protected $userId;
    /**
     * Unique id for knowledge base
     *
     * @var string
     */
    protected $uuid;
    /**
     * Time when the knowledge base was added to the agent
     *
     * @return \DateTime
     */
    public function getAddedToAgentAt(): \DateTime
    {
        return $this->addedToAgentAt;
    }
    /**
     * Time when the knowledge base was added to the agent
     *
     * @param \DateTime $addedToAgentAt
     *
     * @return self
     */
    public function setAddedToAgentAt(\DateTime $addedToAgentAt): self
    {
        $this->initialized['addedToAgentAt'] = true;
        $this->addedToAgentAt = $addedToAgentAt;
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
     * @return string
     */
    public function getDatabaseId(): string
    {
        return $this->databaseId;
    }
    /**
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
     * @return string
     */
    public function getEmbeddingModelUuid(): string
    {
        return $this->embeddingModelUuid;
    }
    /**
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
     * Whether the knowledge base is public or not
     *
     * @return bool
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }
    /**
     * Whether the knowledge base is public or not
     *
     * @param bool $isPublic
     *
     * @return self
     */
    public function setIsPublic(bool $isPublic): self
    {
        $this->initialized['isPublic'] = true;
        $this->isPublic = $isPublic;
        return $this;
    }
    /**
     * IndexingJob description
     *
     * @return ApiIndexingJob
     */
    public function getLastIndexingJob(): ApiIndexingJob
    {
        return $this->lastIndexingJob;
    }
    /**
     * IndexingJob description
     *
     * @param ApiIndexingJob $lastIndexingJob
     *
     * @return self
     */
    public function setLastIndexingJob(ApiIndexingJob $lastIndexingJob): self
    {
        $this->initialized['lastIndexingJob'] = true;
        $this->lastIndexingJob = $lastIndexingJob;
        return $this;
    }
    /**
     * Name of knowledge base
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of knowledge base
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
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
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
     * Region code
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region code
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
     * Tags to organize related resources
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * Tags to organize related resources
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
     * Id of user that created the knowledge base
     *
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * Id of user that created the knowledge base
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * Unique id for knowledge base
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id for knowledge base
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
        return ['addedToAgentAt' => ['added_to_agent_at', 'getAddedToAgentAt', 'setAddedToAgentAt'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'databaseId' => ['database_id', 'getDatabaseId', 'setDatabaseId'], 'embeddingModelUuid' => ['embedding_model_uuid', 'getEmbeddingModelUuid', 'setEmbeddingModelUuid'], 'isPublic' => ['is_public', 'getIsPublic', 'setIsPublic'], 'lastIndexingJob' => ['last_indexing_job', 'getLastIndexingJob', 'setLastIndexingJob'], 'name' => ['name', 'getName', 'setName'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId'], 'region' => ['region', 'getRegion', 'setRegion'], 'tags' => ['tags', 'getTags', 'setTags'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'userId' => ['user_id', 'getUserId', 'setUserId'], 'uuid' => ['uuid', 'getUuid', 'setUuid']];
    }
}