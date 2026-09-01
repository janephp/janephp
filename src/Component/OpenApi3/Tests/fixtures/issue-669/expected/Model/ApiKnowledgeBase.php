<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiKnowledgeBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Time when the knowledge base was added to the agent
     *
     * @var \DateTime
     */
    public \DateTime $addedToAgentAt;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var string
     */
    public string $databaseId;
    /**
     * @var string
     */
    public string $embeddingModelUuid;
    /**
     * Whether the knowledge base is public or not
     *
     * @var bool
     */
    public bool $isPublic;
    /**
     * IndexingJob description
     *
     * @var ApiIndexingJob
     */
    public ApiIndexingJob $lastIndexingJob;
    /**
     * Name of knowledge base
     *
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $projectId;
    /**
     * Region code
     *
     * @var string
     */
    public string $region;
    /**
     * Tags to organize related resources
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Id of user that created the knowledge base
     *
     * @var string
     */
    public string $userId;
    /**
     * Unique id for knowledge base
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['addedToAgentAt' => 'added_to_agent_at', 'createdAt' => 'created_at', 'databaseId' => 'database_id', 'embeddingModelUuid' => 'embedding_model_uuid', 'isPublic' => 'is_public', 'lastIndexingJob' => 'last_indexing_job', 'name' => 'name', 'projectId' => 'project_id', 'region' => 'region', 'tags' => 'tags', 'updatedAt' => 'updated_at', 'userId' => 'user_id', 'uuid' => 'uuid'];
    }
}